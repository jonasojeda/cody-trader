import { createContext, useContext, useState, ReactNode } from "react";
import { api, Country } from "@/lib/api";

interface User {
  id: number;
  email: string;
  username: string | null;
  name: string;
  last_name: string;
  phone: string;
  telegram_user: string;
  country: Country | null;
  registration_date?: string;
  is_active?: number;
}

interface AuthContextType {
  user: User | null;
  isAuthenticated: boolean;
  login: (usernameOrEmail: string, password: string) => Promise<boolean>;
  logout: () => Promise<void>;
  updateProfile: (data: Partial<User>) => void;
}

const AuthContext = createContext<AuthContextType | undefined>(undefined);

export const AuthProvider = ({ children }: { children: ReactNode }) => {
  const [user, setUser] = useState<User | null>(() => {
    const saved = localStorage.getItem("auth_user");
    return saved ? JSON.parse(saved) : null;
  });

  const login = async (usernameOrEmail: string, password: string): Promise<boolean> => {
    try {
      // Determine if input is email or username
      const isEmail = usernameOrEmail.includes("@");

      const credentials = isEmail
        ? { username: usernameOrEmail.split("@")[0], email: usernameOrEmail, password }
        : { username: usernameOrEmail, password };

      const response = await api.login(credentials);

      if (response.accessToken && response.user) {
        // Store the token
        localStorage.setItem("auth_token", response.accessToken);

        // Extract user data from response (data comes from student object)
        const student = response.user.student;
        const userData: User = {
          id: response.user.id,
          email: response.user.email,
          username: response.user.username,
          name: student?.name || "",
          last_name: student?.last_name || "",
          phone: student?.phone || "",
          telegram_user: student?.telegram_user || "",
          country: student?.country || null,
          registration_date: student?.registration_date,
          is_active: student?.is_active,
        };

        setUser(userData);
        localStorage.setItem("auth_user", JSON.stringify(userData));
        return true;
      }
      return false;
    } catch (error) {
      console.error("Login error:", error);
      return false;
    }
  };

  const logout = async () => {
    try {
      // Call API logout to invalidate the token
      await api.logout();
    } catch (error) {
      console.error("Logout error:", error);
    } finally {
      // Clear local storage regardless of API result
      setUser(null);
      localStorage.removeItem("auth_user");
      localStorage.removeItem("auth_token");
    }
  };

  const updateProfile = (data: Partial<User>) => {
    if (user) {
      const updatedUser = { ...user, ...data };
      setUser(updatedUser);
      localStorage.setItem("auth_user", JSON.stringify(updatedUser));
    }
  };

  return (
    <AuthContext.Provider
      value={{ user, isAuthenticated: !!user, login, logout, updateProfile }}
    >
      {children}
    </AuthContext.Provider>
  );
};

export const useAuth = () => {
  const context = useContext(AuthContext);
  if (context === undefined) {
    throw new Error("useAuth must be used within an AuthProvider");
  }
  return context;
};
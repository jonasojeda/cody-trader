import { useState } from "react";
import { Navigate } from "react-router-dom";
import { useAuth } from "@/contexts/AuthContext";
import { DashboardSidebar } from "@/components/dashboard/DashboardSidebar";
import { ProfileSection } from "@/components/dashboard/ProfileSection";
import { CoursesSection } from "@/components/dashboard/CoursesSection";

type ActiveSection = "profile" | "courses";

const Dashboard = () => {
  const { isAuthenticated } = useAuth();
  const [activeSection, setActiveSection] = useState<ActiveSection>("courses");

  if (!isAuthenticated) {
    return <Navigate to="/login" replace />;
  }

  return (
    <div className="min-h-screen bg-background flex">
      <DashboardSidebar 
        activeSection={activeSection} 
        onSectionChange={setActiveSection} 
      />
      
      <main className="flex-1 p-6 md:p-8 overflow-auto">
        {activeSection === "profile" && <ProfileSection />}
        {activeSection === "courses" && <CoursesSection />}
      </main>
    </div>
  );
};

export default Dashboard;
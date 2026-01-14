const API_BASE_URL =
  import.meta.env.VITE_API_BASE_URL || "http://127.0.0.1:8000";

interface ApiOptions {
  sinPaginar?: boolean;
}

async function fetchApi<T>(
  endpoint: string,
  options: ApiOptions = {}
): Promise<T> {
  const params = new URLSearchParams();
  if (options.sinPaginar) params.append("sinPaginar", "1");

  const url = `${API_BASE_URL}/${endpoint}${
    params.toString() ? `?${params}` : ""
  }`;

  const response = await fetch(url, {
    headers: {
      "ngrok-skip-browser-warning": "true",
    },
  });

  if (!response.ok) {
    throw new Error(`API Error: ${response.status}`);
  }

  return response.json();
}

export interface Footer {
  id: number;
  brand_name: string;
  brand_description: string;
  contact_email: string;
  social_links: {
    url: string;
    name: string;
    color: string;
    active: boolean;
  }[];
  navigation_links: {
    url: string;
    label: string;
  }[];
  risk_disclaimer: string;
  copyright_text: string;
  created_at: string;
  updated_at: string;
}

export interface Learning {
  id: number;
  icon: string;
  title: string;
  topics: string[];
  created_at: string;
  updated_at: string;
}

export interface Methodology {
  id: number;
  icon: string;
  title: string;
  description: string;
  created_at: string;
  updated_at: string;
}

export interface Credential {
  id: number;
  icon: string;
  value: string;
  label: string;
  description: string;
}

export interface Instructor {
  id: number;
  name: string;
  role: string;
  experience: string;
  specialty: string;
  achievements: string[];
  image: string | null;
}

interface PaginatedResponse<T> {
  data: T[];
  current_page: number;
  last_page: number;
  total: number;
}

export const api = {
  getFooters: () =>
    fetchApi<PaginatedResponse<Footer>>("footers", { sinPaginar: true }),

  getLearnings: () =>
    fetchApi<PaginatedResponse<Learning>>("learnings", { sinPaginar: true }),

  getMethodologies: () =>
    fetchApi<PaginatedResponse<Methodology>>("methodologies", {
      sinPaginar: true,
    }),

  getInstructors: () =>
    fetchApi<PaginatedResponse<Instructor>>("instructors", {
      sinPaginar: true,
    }),

  getCredentials: () =>
    fetchApi<PaginatedResponse<Credential>>("credentials", {
      sinPaginar: true,
    }),
};

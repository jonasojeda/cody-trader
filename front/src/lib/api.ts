// Configuración de la API
const API_BASE_URL =
  import.meta.env.VITE_API_BASE_URL || "http://127.0.0.1:8000/api";

interface ApiOptions extends RequestInit {
  sinPaginar?: boolean;
  paginadoSimple?: boolean;
  ordenFechaCreado?: string;
}

async function fetchApi<T>(
  endpoint: string,
  options: ApiOptions = {}
): Promise<T> {
  const { sinPaginar, ...fetchOptions } = options;
  const params = new URLSearchParams();
  if (sinPaginar) params.append("sinPaginar", "1");

  const url = `${API_BASE_URL}/${endpoint}${params.toString() ? `?${params}` : ""
    }`;

  let token = "";
  if (typeof window !== "undefined") {
    token = localStorage.getItem("auth_token") || "";
  }

  const headers: any = {
    Accept: "application/json",
    "ngrok-skip-browser-warning": "true",
    ...fetchOptions.headers,
  };

  if (token) {
    headers["Authorization"] = `Bearer ${token}`;
  }

  if (!(fetchOptions.body instanceof FormData)) {
    headers["Content-Type"] = "application/json";
  }

  const response = await fetch(url, {
    ...fetchOptions,
    headers,
  });

  if (!response.ok) {
    if (response.status === 401 && typeof window !== "undefined") {
      localStorage.removeItem("auth_token");
      window.location.href = "/login";
    }
    const error = await response
      .json()
      .catch(() => ({ error: "An error occurred" }));
    throw new Error(
      error.message || error.error || `API Error: ${response.status}`
    );
  }

  if (response.status === 204) {
    return null as T;
  }

  return response.json();
}

export interface HeroData {
  id: number;
  title: string;
  subtitle: string;
  primary_cta_text: string;
  url_primary_cta_text: string;
  secondary_cta_text: string;
  url_secondary_cta_text: string;
  image_path: string;
  is_active: number;
}

export interface Service {
  id: number;
  title: string;
  icon: string;
  description: string;
  items: Array<string | { value: string }>;
  order: number;
  is_active: number;
}

export interface ValueProposition {
  id: number;
  icon: string;
  title: string;
  description: string;
  order: number;
  is_active: number;
}

export interface ProcessStep {
  id: number;
  step_number: number;
  title: string;
  description: string;
  icon: string;
  is_active: number;
}

export interface Project {
  id: number;
  title: string;
  category: string;
  description: string;
  image_path: string;
  url: string;
  order: number;
  is_featured: number;
}

// Actualizado según la respuesta del TestimonialController
export interface Testimonial {
  id: number;
  name: string;
  role: string;
  content: string;
  rating: number;
  avatar: string;
}

export interface Course {
  id: number;
  title: string;
  subtitle: string;
  price: string;
  on_offer: any; // Puede ser null u otro tipo
  original_price: string | null;
  image: string;
  format: string;
  lessons: string;
  popular: boolean;
  syllabus: Array<{ item: string }>;
}

export interface Feature {
  id: number;
  title: string;
  description: string;
  icon: string;
}

export interface WorkPlan {
  id: number;
  title: string;
  subtitle: string;
  description: string;
  bullets: string;
  order: number;
  is_active: number;
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
  getHero: () =>
    fetchApi<PaginatedResponse<HeroData>>("landingHero", { sinPaginar: true }),
  getServices: () =>
    fetchApi<PaginatedResponse<Service>>("services", { sinPaginar: true }),
  getValuePropositions: () =>
    fetchApi<PaginatedResponse<ValueProposition>>("valueProposition", {
      sinPaginar: true,
    }),
  getProcessSteps: () =>
    fetchApi<PaginatedResponse<ProcessStep>>("processStep", {
      sinPaginar: true,
    }),
  getProjects: () =>
    fetchApi<PaginatedResponse<Project>>("projects", { sinPaginar: true }),
  getTestimonials: () =>
    fetchApi<PaginatedResponse<Testimonial>>("testimonials", {
      sinPaginar: true,
    }),
  getCourses: () =>
    fetchApi<PaginatedResponse<Course>>("courses", { sinPaginar: true }),
  getFeatures: () =>
    fetchApi<PaginatedResponse<Feature>>("features", { sinPaginar: true }),
  getWorkPlans: () =>
    fetchApi<PaginatedResponse<WorkPlan>>("workPlan", { sinPaginar: true }),
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
  getSlides: () =>
    fetchApi<PaginatedResponse<Slide>>("slides", {
      sinPaginar: true,
      paginadoSimple: true,
      ordenFechaCreado: "DESC"
    }),
};

export interface SlideIndicator {
  icon: string;
  text: string;
  color: string;
}

export interface Slide {
  id: number;
  title: string;
  highlight: string;
  tag: string;
  description: string;
  primary_btn_text: string;
  primary_btn_link: string;
  secondary_btn_text: string;
  secondary_btn_link: string;
  image: string;
  floating_card_title: string;
  floating_card_description: string;
  floating_card_icon: string;
  indicators: SlideIndicator[];
  expiration: boolean;
  expiration_date: string | null;
  activation_date: string | null;
}

import axios from "axios";

const baseURL =
    process.env.NODE_ENV === "production"
        ? "https://e-ticket-poc2025-586fa4878be3.herokuapp.com/api"
        : "http://localhost:8000/api";

const api = axios.create({
    baseURL: baseURL,
    headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
    },
});

export default api;

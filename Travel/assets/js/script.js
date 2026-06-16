const header = document.querySelector(".site-header");
const navToggle = document.querySelector(".nav-toggle");
const darkModeToggle = document.getElementById("darkModeToggle");

// Mobile navigation toggle
if (header && navToggle) {
    navToggle.addEventListener("click", () => {
        const isOpen = header.classList.toggle("nav-open");
        navToggle.setAttribute("aria-expanded", String(isOpen));
    });
}

// Dark mode toggle
function initDarkMode() {
    const isDarkMode = localStorage.getItem("darkMode") === "true";
    if (isDarkMode) {
        document.documentElement.classList.add("dark-mode");
        updateDarkModeButton();
    }
}

function updateDarkModeButton() {
    if (darkModeToggle) {
        const isDark = document.documentElement.classList.contains("dark-mode");
        darkModeToggle.textContent = isDark ? "☀️" : "🌙";
    }
}

if (darkModeToggle) {
    darkModeToggle.addEventListener("click", () => {
        const isDark = document.documentElement.classList.toggle("dark-mode");
        localStorage.setItem("darkMode", isDark);
        updateDarkModeButton();
    });
}

// Initialize dark mode on page load
document.addEventListener("DOMContentLoaded", initDarkMode);


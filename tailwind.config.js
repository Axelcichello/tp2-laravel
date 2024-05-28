/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/web/**/*.blade.php",
    "./resources/backoffice/**/*.blade.php", // Agregar esta línea para incluir los archivos .blade.php dentro de la carpeta web
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
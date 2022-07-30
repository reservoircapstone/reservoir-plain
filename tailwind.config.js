/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.{html,js,php}", "./index.php"],
  theme: {
    extend: {
      fontFamily: {
        Poppins: ["Poppins, sans-serif"],
      },
      colors: {
        "reservoir-blue": "#242A45",
        "reservoir-white": "#F7F7F7",
        "reservoir-red": "#FA5959",
        "reservoir-grey": "#9194A2",
      },
      container: {
        center: true,
        padding: "1rem",
        screens: {
          lg: "1124px",
          xl: "1124px",
          "2xl": "1124px",
        },
      },
    },
  },
  plugins: [require("flowbite/plugin")],
};

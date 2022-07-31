/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.{html,js,php}",
    "./node_modules/flowbite/**/*.js",
    "./index.php",
    "./index-edited.php",
    "./pull-table.php",
    "./login.php",
    "./register-login.php",
    "./add-product.php",
  ],
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

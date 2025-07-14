module.exports = {
  content: {
    files: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./resources/views/**/*.blade.php",
    ],
    safelist: [
      'bg-red-100',
      'bg-red-500',
      'bg-blue-500',
      'text-gray-800',
      'min-h-screen',
      'flex',
      'flex-col'
    ],
  },
  theme: {
    extend: {},
  },
  plugins: [],
}
/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',
  purge: {
	  content: [
	      "./resources/**/*.blade.php",
	      "./resources/**/*.js",
	      "./resources/**/*.vue",
	  ],
  }
  theme: {
  	fontFamily: {
  	      'sans': ['Prometo', 'sans-serif'],
  	      'serif': ['Georgia', 'Cambria'],
  	      'mono': ['SFMono-Regular', 'Menlo'],
  	      'body': ['Soleto', 'sans-serif'] 
  	    },
    extend: {
    	// extend more width values
 	      spacing: {
 	        '72': '18rem',
 	        '84': '21rem',
 	        '96': '24rem',
 	        '108': '27rem',
 	        '120': '30rem',
 	      },
 	
 	      // extended theme colours of Insoft services
 	      colors: {
	       primary: {
	         // Oxford
	         default: '#334755',
	         100: '#EBEDEE',
	         200: '#CCD1D5',
	         300: '#ADB5BB',
	         400: '#707E88',
	         500: '#334755',
	         600: '#2E404D',
	         700: '#1F2B33',
	         800: '#172026',
	         900: '#0F151A',
	       },
	       secondary: {
	         default: '#82C579',
	         100: '#F3F9F2',
	         200: '#E0F1DE',
	         300: '#CDE8C9',
	         400: '#A8D6A1',
	         500: '#82C579',
	         600: '#75B16D',
	         700: '#4E7649',
	         800: '#3B5936',
	         900: '#273B24',
	       },
	       tertiary: {
	         default: '#5C7B8F',
	         100: '#EFF2F4',
	         200: '#D6DEE3',
	         300: '#BECAD2',
	         400: '#8DA3B1',
	         500: '#5C7B8F',
	         600: '#536F81',
	         700: '#374A56',
	         800: '#293740',
	         900: '#1C252B',
	       },
	       quartary: {
	         default: '#556978',
	         100: '#EEF0F2',
	         200: '#D5DADD',
	         300: '#BBC3C9',
	         400: '#8896A1',
	         500: '#556978',
	         600: '#4D5F6C',
	         700: '#333F48',
	         800: '#262F36',
	         900: '#1A2024',
	       },
		// some default styling colors generated for the page 		
	       white: '#FFFFFF',
	       black: '#020202',
	       transparent: 'transparent',
	       brand: '#334755',
	       cta: '#553336',
	       info: '#3cbdda',
	       warning: '#d7bc32',
	       success: '#41ca4e',
	       danger: '#d84248',
	       error: '#FF6363',
	       searchbar: '#DCF0FA',
	     },
    },
  },
  plugins: [
  	require('tailwindcss-filters'), // add tailwind filters plugin to for creating inline class filters
  ],
}

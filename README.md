# Initial template for projects in CodeIgniter


## Features

- [Codeigniter](https://codeigniter.com/)
CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications.
<br>

- [Tailwindcss 4.x](https://tailwindcss.com/)
A utility-first CSS framework packed with classes like flex, pt-4, text-center and rotate-90 that can be composed to build any design, directly in your markup.
<br>

- [Flowbite](https://flowbite.com/dochttps://flowbite.com/docs/getting-started/introduction/)
        Get started with the most popular open-source library of interactive UI components built with the utility classes from Tailwind CSS
        <br>

- [Pictogrammer Icons](https://pictogrammers.com/library/mdi/)
Open-source iconography for designers and developers
<br>

- [jQuery](https://jquery.com/)
jQuery is a fast, small, and feature-rich JavaScript library.
<br>

- [Poppins - Google Fonts](https://fonts.google.com/specimen/Poppins)

<br>

- Dark Theme and responsive
- Custom theme

<br>

## Gif
<img src="./github/project.gif" style="max-width: 100%;" />
<br><br>

<div id="Installation">

## :computer: Installation

  :warning: Before installing this project, make sure you have all [requirements](https://codeigniter.com/user_guide/intro/requirements.html).

### Step 1 - Download this project
  ##### Option :one: - Download Zip 
  ##### Option :two: - Cloning a repository - [how to do this](https://docs.github.com/en/repositories/creating-and-managing-repositories/cloning-a-repository). 

<br>

### Step 2 - Configuration

  #### 2.1 - Install the dependencies
  
  ````
    composer install
  ````

  #### 2.2 - Run the serve
  
  ````
    php spark serve
  ````

</div>
<br><br>

## Run Tailwindcss
 :warning: You must have [NodeJs](https://nodejs.org/en) installed in your machine.

Run the command below to install tailwindcss

    npm install

  <br>
Run the command below to activate tailwindcss


    //change the path according to your project
    npx @tailwindcss/cli -i ./tailwind/input.css -o ./public/assets/css/tailwind.css --watch
</br></br>

# Custom theme
Edit ``ROOTPATH / tailwind / input.css`` file to create your own custom theme.

````
@theme {
  /* 
    'primary-base-color': '#D71921', //red
    use https://uicolors.app/create to build your custom palette color
  */
  --color-primary-50: #fff1f2;
  --color-primary-100: #ffe1e2;
  --color-primary-200: #ffc7c9;
  --color-primary-300: #ffa1a5;
  --color-primary-400: #fe6b71;
  --color-primary-500: #f73c44;
  --color-primary-600: #d71921;
  --color-primary-700: #c1141b;
  --color-primary-800: #9f151b;
  --color-primary-900: #84181d;
  --color-primary-950: #48070a;
  /* 
    secondary-base-color: #06377B, //blue
    use https://uicolors.app/create to build your custom palette color
  */
  --color-secondary-50: #eaf9ff;
  --color-secondary-100: #d1f2ff;
  --color-secondary-200: #ace9ff;
  --color-secondary-300: #74ddff;
  --color-secondary-400: #32c7ff;
  --color-secondary-500: #04a5ff;
  --color-secondary-600: #007dff;
  --color-secondary-700: #0064ff;
  --color-secondary-800: #0052da;
  --color-secondary-900: #004baa;
  --color-secondary-950: #06377b;
}
````

Made with :heart: by Jabes Enock
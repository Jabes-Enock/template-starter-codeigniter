<div class="space-y-8 mt-16">
    <hr class="text-gray-300">
    <div>
        <p class="text-3xl text-gray-500 my-8">Theme</p>
        <small class="bg-secondary-50 text-secondary-600 py-2 px-4 rounded-xl border border-secondary-600">Edit
            theme in ROOTPATH / tailwind /
            input.css</small>
    </div>
    <div>
        <div class="flex flex-wrap gap-4 justify-between max-w-xl">
            <p class=" text-xl text-primary-600">Primary color </p>
            <div class="flex flex-wrap gap-2">
                <div class="h-6 w-6 bg-primary-50"></div>
                <div class="h-6 w-6 bg-primary-100"></div>
                <div class="h-6 w-6 bg-primary-200"></div>
                <div class="h-6 w-6 bg-primary-300"></div>
                <div class="h-6 w-6 bg-primary-400"></div>
                <div class="h-6 w-6 bg-primary-500"></div>
                <div class="h-6 w-6 bg-primary-600"></div>
                <div class="h-6 w-6 bg-primary-700"></div>
                <div class="h-6 w-6 bg-primary-800"></div>
                <div class="h-6 w-6 bg-primary-950"></div>
                <div class="h-6 w-6 bg-primary-900"></div>
            </div>
        </div>
    </div>
    <div>
        <div class="flex flex-wrap gap-4 justify-between  max-w-xl">
            <p class="text-xl text-secondary-600">Secondary color </p>
            <div class="flex flex-wrap gap-2">
                <div class="h-6 w-6 bg-secondary-50"></div>
                <div class="h-6 w-6 bg-secondary-100"></div>
                <div class="h-6 w-6 bg-secondary-200"></div>
                <div class="h-6 w-6 bg-secondary-300"></div>
                <div class="h-6 w-6 bg-secondary-400"></div>
                <div class="h-6 w-6 bg-secondary-500"></div>
                <div class="h-6 w-6 bg-secondary-600"></div>
                <div class="h-6 w-6 bg-secondary-700"></div>
                <div class="h-6 w-6 bg-secondary-800"></div>
                <div class="h-6 w-6 bg-secondary-950"></div>
                <div class="h-6 w-6 bg-secondary-900"></div>
            </div>
        </div>
    </div>
</div>

<pre class="text-white bg-gray-800 p-8 overflow-x-auto">
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

@custom-variant dark (&:where(.dark, .dark *));
</pre>
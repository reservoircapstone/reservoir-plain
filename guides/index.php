<?php include('../resources/views/layouts/header.php'); ?>

<body>
<?php include('../resources/views/layouts/navigation.php'); ?>
  <?php
  $part1steps = [
    'run <b>npm init command</b><br /><i>(initialize and create package.json file)</i>',
    'add home page (index.php)<br /> and put <b>Hello World!</b><br />in the body tag',
  ];
$part2steps = [
  '<b><i>NOTE: We\'re not gonna use this setup so you may skip this<br />This setup is only good for quick / small projects</i></b><br />add tailwind cdn <b>("https://cdn.tailwindcss.com")</b> in the head tag.',
  'change title from document to reservoir',
  'enclose Hello World in h3 tag and add <b>"text-3xl font-bold underline"</b>',
  '<b>go to home page</b><br /> see if the text is styled and see what the cdn looks like',
];
$part3Asteps = [
  'Follow step 2 and step 3 from Part 2<br /><b>npm install -D tailwindcss
      <br/>npx tailwindcss init</b>
      <br/>',
  'add the paths to all your template files in your tailwind.config.js<br /> 
      <b>"./resources/**/*.{html,js,php}",</b><br />
      <b>"./index.php"</b>',
  'add resources/css/main.css and paste this:<br />
      <b>@tailwind base;<br />
@tailwind components;<br />
@tailwind utilities;</b>',
  'run <b>npx tailwindcss -i ./resources/css/main.css -o ./css/main.css --watch</b>,<br /> and view the page again.',
];
$part3Bsteps = [
  'Brief explanation on how tailwind\'s build process works and why you should only change the input files rather than the generated output files.',
  'Here we see that when we change css/main.css (the generated file / output) it will be overriden by the changes made in resources/css/main.css once we build the files.',
  'running <b>npx tailwindcss -i ./resources/css/main.css -o ./css/main.css</b> will build the file once.',
  'adding <b>--watch</b> to the command above will watch and build for any saved changes made.',
];
$part3Csteps = [
  'We will breakdown the contents of the generated output file /css/main.css.',
];
$part4steps = [
  'Note that we\'re still watching for file changes and constantly rebuilding css files (as you can see on the terminal).',
  'Let\'s add some images and home page content.',
  'Let\'s view and refresh the home page.',
  '<b>TIP: </b>Try zooming in and out to see what it looks like for mobile devices.',
];
$part5steps = [
  'Create header.php, footer.php and nav.php under views/layouts.',
  'Let\'s seperate the header, footer and nav from the index page and paste it to their respective view files.',
  'By doing this, we can now include them wherever we want and change it on just a single location.',
];
$part6steps = [
  '<b>Note: you can skip this if your gonna be using a different setup</b>',
  'run <b>npm install laravel-mix --save-dev</b><br />(This will install mix as a dev dependency.)',
  'create tailwind.config.js or run <b>touch tailwind.config.js</b><br />Copy and paste the following in the new config file: <br />
      <b>let mix = require(\'laravel-mix\');<br />
          mix.js("resources/js/app.js", "js")<br />
      .postCss("resources/css/app.css", "css", [ <br />
        require("tailwindcss"), <br />
      ]);</b><br /><br />
      create resources/js/app.js and add <b>alert(\'hello world\');</b> ',
  'add this script <b>&lt;script src=&quot;js/app.js&quot; defer&gt;&lt;/script&gt;</b> to index.php<br />
      and rssun <b>npx mix</b><br />
      reload the home page and see if it works',
];
$parts = [
  new Part("1", "The Home Page", "step1.gif", $part1steps),
  new Part("2", "Tailwind CDN", "step2.gif", $part2steps),
  new Part("3A", "Tailwind CLI", "step3A.gif", $part3Asteps),
  new Part("3B", "The Build Process", "step3B.gif", $part3Bsteps),
  new Part("3C", "Studying The Ouput", "step3C.gif", $part3Csteps),
  new Part("4", "More Home Page Content", "step4.gif", $part4steps),
  new Part("5", "Header, Footer, Nav", "step5.gif", $part5steps),
  new Part("6", "A Webpack Wrapper (Mix)", "step6.gif", $part6steps),
];
?>
  <div class="container m-auto text-grey-darkest">
    <?php foreach ($parts as $part) : ?>
      <h3 class="p-4 m-2 text-3xl font-bold text-center">PART <?= $part->num() . " - " . $part->title(); ?></h3>
      <div class="flex flex-wrap -mx-4 mb-12 <?= isAlternate($part->num()) ? 'md:flex-row-reverse' : '' ?>">
        <div class="px-4 w-full md:w-2/3 lg:w-3/4">
          <div class="flex justify-center text-sm text-grey-dark">
            <img class="object-cover object-center p-4 rounded-lg" src="<?= ( $part->path() . $part->image()); ?>" alt="step" />
          </div>
        </div>
        <div class="px-4 mb-4 w-full md:w-1/3 lg:w-1/4">
          <div class="flex justify-start text-sm text-grey-dark">
            <!-- <p>full / half / quarter</p> -->
            <div class="p-4">
              <?php if (!empty($part->steps()[0])) {
                  echo '<div class="flex relative pb-12">
                <div
                  class="flex absolute inset-0 justify-center items-center w-10 h-full"
                >
                  <div class="w-1 h-full bg-gray-200 pointer-events-none"></div>
                </div>
                <div
                  class="inline-flex relative z-10 flex-shrink-0 justify-center items-center w-10 h-10 text-white bg-blue-500 rounded-full"
                >
                  <svg
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    class="w-5 h-5"
                    viewBox="0 0 24 24"
                    data-darkreader-inline-stroke=""
                    style="--darkreader-inline-stroke: currentColor"
                  >
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                  </svg>
                </div>
                <div class="flex-grow pl-4">
                  <h2
                    class="mb-1 text-sm font-medium tracking-wider text-gray-900 title-font"
                  >
                    STEP 1
                  </h2>
                  <p class="leading-relaxed">'
                                            . $part->steps()[0]
                                            . '</p>
                </div>
              </div>';
              }
        ?>
              <?php if (!empty($part->steps[1])) {
                  echo '<div class="flex relative pb-12">
                <div
                  class="flex absolute inset-0 justify-center items-center w-10 h-full"
                >
                  <div class="w-1 h-full bg-gray-200 pointer-events-none"></div>
                </div>
                <div
                  class="inline-flex relative z-10 flex-shrink-0 justify-center items-center w-10 h-10 text-white bg-blue-500 rounded-full"
                >
                  <svg
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    class="w-5 h-5"
                    viewBox="0 0 24 24"
                    data-darkreader-inline-stroke=""
                    style="--darkreader-inline-stroke: currentColor"
                  >
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                  </svg>
                </div>
                <div class="flex-grow pl-4">
                  <h2
                    class="mb-1 text-sm font-medium tracking-wider text-gray-900 title-font"
                  >
                    STEP 2
                  </h2>
                  <p class="leading-relaxed">'
                        . $part->steps()[1]
                        . '</p>
                </div>
              </div>';
              }
        ?>
              <?php if (!empty($part->steps()[2])) {
                  echo '<div class="flex relative pb-12">
                <div
                  class="flex absolute inset-0 justify-center items-center w-10 h-full"
                >
                  <div class="w-1 h-full bg-gray-200 pointer-events-none"></div>
                </div>
                <div
                  class="inline-flex relative z-10 flex-shrink-0 justify-center items-center w-10 h-10 text-white bg-blue-500 rounded-full"
                >
                  <svg
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    class="w-5 h-5"
                    viewBox="0 0 24 24"
                    data-darkreader-inline-stroke=""
                    style="--darkreader-inline-stroke: currentColor"
                  >
                    <circle cx="12" cy="5" r="3"></circle>
                    <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                  </svg>
                </div>
                <div class="flex-grow pl-4">
                  <h2
                    class="mb-1 text-sm font-medium tracking-wider text-gray-900 title-font"
                  >
                    STEP 3
                  </h2>
                  <p class="leading-relaxed">'
                        . $part->steps()[2]
                        . '</p>
                </div>
              </div>';
              } ?>
              <?php if (!empty($part->steps()[3])) {
                  echo '<div class="flex relative">
                <div
                  class="inline-flex relative z-10 flex-shrink-0 justify-center items-center w-10 h-10 text-white bg-blue-500 rounded-full"
                >
                  <svg
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    class="w-5 h-5"
                    viewBox="0 0 24 24"
                    data-darkreader-inline-stroke=""
                    style="--darkreader-inline-stroke: currentColor"
                  >
                    <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                    <path d="M22 4L12 14.01l-3-3"></path>
                  </svg>
                </div>
                <div class="flex-grow pl-4">
                  <h2
                    class="mb-1 text-sm font-medium tracking-wider text-gray-900 title-font"
                  >
                    STEP 4
                  </h2>
                  <p class="leading-relaxed">'
                        . $part->steps()[3]
                        . '</p>
                </div>
              </div>';
              } ?>
              <!-- here -->
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
<?php include('../resources/views/layouts/footer.php'); ?>

<?php
function isAlternate($num)
{
    return $num % 2 == 0;
}
?>

<?php
class Part
{
    // Properties
    private $num;
    private $image;
    private $title;
    private $steps;
    private $path;


    public function __construct($num, $title, $image, $steps)
    {
        $this->num = $num;
        $this->image = $image;
        $this->title = $title;
        $this->steps = $steps;
        $this->path = "../resources/img/guides/";
    }

    public function num()
    {
        return $this->num;
    }

    public function title()
    {
        return $this->title;
    }

    public function image()
    {
        return $this->image;
    }

    public function path()
    {
        return $this->path;
    }

    public function steps()
    {
        return $this->steps;
    }
}
?>
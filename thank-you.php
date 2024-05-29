<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Dwiyan Toro</title>
    <link rel="shortcut icon" href="img/Myself-3.jpg" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body class="bg-gray-100">
    <!-- Loader with Tailwind CSS -->
    <div id="loader" class="fixed inset-0 flex items-center justify-center bg-gray-100 dark:bg-gray-900 z-50">
        <div class="loader border-4 border-gray-300 border-t-4 border-t-indigo-600 rounded-full w-16 h-16 animate-spin">
        </div>
    </div>

    <header class="bg-white dark:bg-gray-800 shadow transition-colors duration-300 transition-theme animate__animated animate__fadeInDown">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="text-2xl font-bold text-gray-800 dark:text-white transition-theme italic">
                Dwiyan Toro
            </div>
            <div class="hidden md:flex mx-auto">
                <nav class="flex space-x-6">
                    <a href="index.php" id="nav-home"
                        class="text-gray-800 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-theme italic">
                        <i class="fa-solid fa-house"></i> Home</a>
                    <a href="about.php" id="nav-about"
                        class="text-gray-800 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-theme italic">
                        <i class="fa-solid fa-eject"></i> About</a>
                    <a href="projects.php" id="nav-projects"
                        class="text-gray-800 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-theme italic">
                        <i class="fa-solid fa-diagram-project"></i> Projects</a>
                    <a href="skills.php" id="nav-skills"
                        class="text-gray-800 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-theme italic">
                        <i class="fa-solid fa-kitchen-set"></i> Skills</a>
                    <a href="hobbies.php" id="nav-hobbies"
                        class="text-gray-800 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-theme italic">
                        <i class="fa-solid fa-snowman"></i> Hobbies</a>
                    <a href="contact.php" id="nav-contact"
                        class="text-gray-800 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-theme italic">
                        <i class="fa-solid fa-address-book"></i> Contact</a>
                </nav>
            </div>
            <div class="md:hidden">
                <button id="menu-btn" class="menu-btn flex flex-col space-y-1 focus:outline-none">
                    <span class="line block w-8 h-1 bg-gray-800 dark:bg-gray-200 transition-theme"></span>
                    <span class="line block w-8 h-1 bg-gray-800 dark:bg-gray-200 transition-theme"></span>
                    <span class="line block w-8 h-1 bg-gray-800 dark:bg-gray-200 transition-theme"></span>
                </button>
            </div>
        </div>
        <div id="mobile-menu"
            class="hidden md:hidden bg-white dark:bg-gray-800 transition-colors duration-300 transition-theme">
            <a href="index.php" id="mobile-nav-home"
                class="block px-4 py-2 my-2 text-gray-800 dark:text-gray-200 hover:bg-indigo-600 dark:hover:bg-indigo-400 hover:text-white transition-theme italic">
                <i class="fa-solid fa-house"></i> Home</a>
            <a href="about.php" id="mobile-nav-about"
                class="block px-4 py-2 my-2 text-gray-800 dark:text-gray-200 hover:bg-indigo-600 dark:hover:bg-indigo-400 hover:text-white transition-theme italic">
                <i class="fa-solid fa-eject"></i> About</a>
            <a href="projects.php" id="mobile-nav-projects"
                class="block px-4 py-2 my-2 text-gray-800 dark:text-gray-200 hover:bg-indigo-600 dark:hover:bg-indigo-400 hover:text-white transition-theme italic">
                <i class="fa-solid fa-diagram-project"></i> Projects</a>
            <a href="skills.php" id="mobile-nav-skills"
                class="block px-4 py-2 my-2 text-gray-800 dark:text-gray-200 hover:bg-indigo-600 dark:hover:bg-indigo-400 hover:text-white transition-theme italic">
                <i class="fa-solid fa-kitchen-set"></i> Skills</a>
            <a href="hobbies.php" id="mobile-nav-hobbies"
                class="block px-4 py-2 my-2 text-gray-800 dark:text-gray-200 hover:bg-indigo-600 dark:hover:bg-indigo-400 hover:text-white transition-theme italic">
                <i class="fa-solid fa-snowman"></i> Hobbies</a>
            <a href="contact.php" id="mobile-nav-contact"
                class="block px-4 py-2 my-2 text-gray-800 dark:text-gray-200 hover:bg-indigo-600 dark:hover:bg-indigo-400 hover:text-white transition-theme italic">
                <i class="fa-solid fa-address-book"></i> Contact</a>
        </div>
    </header>
    <main class="container mx-auto py-16 px-6">
        <section class="mt-16 fade-in text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-12 text-gray-800 italic">Thank You!</h2>
            <div class="max-w-3xl mx-auto mb-12">
                <p class="text-lg md:text-xl mb-8 text-gray-600 italic">Thank you for reaching out! Your message has been received. We will get back to you shortly.</p>
                <a href="contact.php" class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:from-indigo-600 hover:to-blue-600 transition-transform transform hover:scale-105">Back to Contact Page</a>
            </div>
        </section>
    </main>

    <footer class="bg-white dark:bg-gray-800 py-6 mt-16 shadow transition-colors duration-300       transition-theme">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4 italic">About Me</h3>
                    <p class="text-gray-200 italic">I am Dwiyan Toro, a vocational school student majoring in Sistem, Informasi, Jaringan, and Aplikasi (SIJA) and a passionate developer who loves creating modern and interactive web experiences.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4 italic">Quick Links</h3>
                    <ul>
                        <li class="mb-2">
                            <a href="index.php" class="text-gray-200 hover:text-gray-400 transition italic">Home</a>
                        </li>
                        <li class="mb-2">
                            <a href="about.php" class="text-gray-200 hover:text-gray-400 transition italic">About</a>
                        </li>
                        <li class="mb-2">
                            <a href="projects.php" class="text-gray-200 hover:text-gray-400 transition">Projects</a>
                        </li>
                        <li class="mb-2">
                            <a href="skills.php" class="text-gray-200 hover:text-gray-400 transition italic">Skills</a>
                        </li>
                        <li class="mb-2">
                            <a href="hobbies.php"
                                class="text-gray-200 hover:text-gray-400 transition italic">Hobbies</a>
                        </li>
                        <li class="mb-2">
                            <a href="contact.php"
                                class="text-gray-200 hover:text-gray-400 transition italic">Contact</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4 italic">Follow Me</h3>
                    <div class="flex space-x-4">
                        <a href="https://www.tiktok.com/@iyanyww" class="text-gray-200 hover:text-gray-400 transition transform hover:scale-110">
                            <img src="img/tiktok.png" alt="tiktok" srcset="">
                        </a>
                        <a href="https://github.com/dwiyan135" class="text-gray-200 hover:text-gray-400 transition transform hover:scale-110">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAMAAABF0y+mAAAAeFBMVEUjHyAiHyAjHiAiHiAgHB0UDRAAAAAaFReEgoPBwMDf39/v7++2trb///+xsLBzcnL+/v5qaGmWlZWMiosJAAAMAAUeGRtCP0Chn6BZV1hRT1A2MjPZ2dlfXV08OTpKSEjQz89lY2MXEhR9e3z19fXHxsbn5+cqJifS2g27AAABfElEQVR4AWVRBaLkUAjjGUzdfdz2/jdcoLLyU6PQlBAAwDBgg9nuZousBef47gMqgge7Fvgra53lEtIpipMkjk4BvZO03X7kgk+zAzmFo40xDovsb5QVMscpzWHNCcHxaHDntqfsB4rOqqx+4JdxivZ8Oud8X3pVjGeOLx3OxZXoWtywqzhxR6HSxJ2yBwE9e+/7Zw9PlXcjZmIkxeqpUyueLx2oBXD4Xn8iNTnd1ijhlF+E+Aq7rzJeOHEqAw/9LIE2gN11umSMoRc9jInU6b1ppYp66G/CPAWrTutpQyPFaw++l+CD8AcG72Jw5zj6CnXmcF9iqy3PyGE3bovoVBS124pqGcD/YvN4LfHILgFV+TdTkJd1IvusXkvxuW92bLWJwySLu/GeomhF3Wn2RY6ZCXQtsxGf6MUfVN576Xe/nsM7K7+JyFuLyfUJByh8OIU7M+rIbIM5Pj1OH2YaywI+M3ony1nL1lggRH13iLTayGqMAGA95eb22JjfaOUa5/ipzPYAAAAASUVORK5CYII=" alt="github" srcset="">
                        </a>
                        <a href="https://www.instagram.com/iyanyww/" class="text-gray-200 hover:text-gray-400 transition transform hover:scale-110">
                            <img src="img/ig.png" alt="instagram" srcset="">
                        </a>
                    </div>
                </div>
                
            </div>
            <div class="mt-8 border-t border-gray-700 pt-6 text-center">
                <p class="text-gray-300 italic">&copy; 2024 Dwiyan Toro. All rights reserved.</p>
            </div>
    </footer>


    <script src="js/mobile-menu.js"></script>
    <script src="js/loader.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>
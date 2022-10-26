<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/tailwind.css" rel="stylesheet">
    <link href="./css/input.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Adi Sulaksono | Portofolio</title>
</head>
<body class="bg-slate-800">
    <div class="relative container flex-col justify-center pt-7">
        <div class="relative mx-14 max-sm:mx-3 flex flex-row items-center justify-between">
            <a class="w-20 rounded-full" href="https://adislksn.github.io">
                <img class="w-20 rounded-full" src="./assets/20210209_173309.jpg" alt="🧛🏻">
            </a>
            <a href="#">
                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-300 to-cyan-300 group-hover:from-cyan-300 group-hover:to-cyan-300 hover:text-slate-900 dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                    <p class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-slate-800 dark:bg-gray-900 rounded-md group-hover:bg-opacity-0 text-slate-200 hover:text-slate-800 font-poppins">
                        Work together?
                    </p>
                </button>
            </a>
        </div>

        <div class="relative flex flex-col items-center mx-10 max-sm:mx-4 pt-3">
            <h1 class="text-cyan-300 text-5xl max-sm:text-4xl font-batuphat">
                Hello there👋🏻
            </h1>
            <div class="container flex flex-row items-center justify-center">
                <div data-aos="fade-right">
                    <h2 class="text-cyan-300 text-3xl max-sm:text-2xl font-poppins">
                        Hi, I'm Adi.
                    </h2>
                    <p class="text-slate-100 text-2xl max-sm:text-lg font-poppins">
                        I like design and code simple things, currently I focused on Front-End Developer 
                    </p>
                </div>
                <div data-aos="fade-left">
                    <img class="reflect-img" src="./assets/SAVE_20220823_153648-removebg-preview.png">
                </div>
            </div>
        </div>    
    </div>

    <div class="relative bg-zinc-300 flex flex-col items-center">
        <h2 class="text-slate-800 font-batuphat text-3xl max-sm:text-1xl py-5"  data-aos="fade-up">
            My Tech Stacks
        </h2>
        <div class="pb-9 pt-4">
            <div class="grid grid-cols-8 gap-4 max-[900px]:grid-cols-3 max-[480px]:grid-cols-2 mx-2">
                <a class="relative flex-row flex justify-center items-center border-collapse border-slate-800 rounded-full shadow-md shadow-cyan-600 hover:-translate-y-2" href="#" data-aos="fade-up">
                    <i class="fa-brands fa-html5 px-2 py-2"></i>
                    <p class="py-2 pr-2 font-poppins">HTML</p>
                </a>
                <a class="relative flex-row flex justify-center items-center border-collapse border-slate-800 rounded-full shadow-md shadow-cyan-600 hover:-translate-y-2" href="#" data-aos="fade-down">
                    <i class="fa-brands fa-css3-alt px-2 py-2"></i>
                    <p class="py-2 pr-2 font-poppins">CSS</p>
                </a>
                <a class="relative flex-row flex justify-center items-center border-collapse border-slate-800 rounded-full shadow-md shadow-cyan-600 hover:-translate-y-2" href="#" data-aos="fade-up">
                    <i class="fa-brands fa-bootstrap px-2 py-2"></i>
                    <p class="py-2 pr-2 font-poppins">Bootstrap</p>
                </a>
                <a class="relative flex-row flex justify-center items-center border-collapse border-slate-800 rounded-full shadow-md shadow-cyan-600 hover:-translate-y-2" href="#" data-aos="fade-down">
                    <svg width="21" height="13" viewBox="0 0 21 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.271 3.90633C16.4898 3.63728 15.8002 3.15351 15.2814 2.5105C14.7096 1.79408 13.9815 1.21793 13.1528 0.82615C12.3241 0.434366 11.4167 0.237319 10.5002 0.250084C9.26721 0.162767 8.0466 0.543048 7.08142 1.3152C6.11623 2.08734 5.47729 3.1947 5.29183 4.41675C5.65711 3.80555 6.20689 3.32599 6.86203 3.04708C7.51718 2.76818 8.24391 2.70431 8.93766 2.86467C9.71755 3.14155 10.406 3.62814 10.9272 4.27092C11.5022 4.98162 12.2317 5.55181 13.0602 5.93809C13.8888 6.32438 14.7945 6.51659 15.7085 6.50008C16.9414 6.5874 18.1621 6.20712 19.1272 5.43497C20.0924 4.66282 20.7314 3.55546 20.9168 2.33342C20.5582 2.95193 20.0102 3.43873 19.3537 3.72196C18.6972 4.00519 17.967 4.06983 17.271 3.90633ZM3.72933 9.09383C4.51052 9.36289 5.20008 9.84666 5.71891 10.4897C6.29074 11.2061 7.01885 11.7822 7.84756 12.174C8.67626 12.5658 9.5836 12.7628 10.5002 12.7501C11.7331 12.8374 12.9537 12.4571 13.9189 11.685C14.8841 10.9128 15.523 9.80546 15.7085 8.58342C15.3432 9.19462 14.7934 9.67418 14.1383 9.95309C13.4831 10.232 12.7564 10.2959 12.0627 10.1355C11.2828 9.85862 10.5943 9.37203 10.0731 8.72925C9.49658 8.02031 8.76678 7.45137 7.93861 7.06525C7.11044 6.67913 6.20548 6.4859 5.29183 6.50008C4.05888 6.41277 2.83827 6.79305 1.87309 7.5652C0.9079 8.33734 0.268957 9.4447 0.0834961 10.6668C0.442149 10.0482 0.990171 9.56143 1.64666 9.27821C2.30314 8.99498 3.0333 8.93034 3.72933 9.09383Z" fill="black"/>
                    </svg>                        
                    <p class="py-2 pr-2 pl-2 font-poppins">Tailwind</p>
                </a>
                <a class="relative flex-row flex justify-center items-center border-collapse border-slate-800 rounded-full shadow-md shadow-cyan-600 hover:-translate-y-2" href="#" data-aos="fade-up">
                    <i class="fa-brands fa-js px-2 py-2"></i>
                    <p class="py-2 pr-2 font-poppins">Javascript</p>
                </a>
                <a class="relative flex-row flex justify-center items-center border-collapse border-slate-800 rounded-full shadow-md shadow-cyan-600 hover:-translate-y-2" href="#" data-aos="fade-down">
                    <i class="fa-brands fa-python px-2 py-2"></i>
                    <p class="py-2 pr-2 font-poppins">Python</p>
                </a>
                <a class="relative flex-row flex justify-center items-center border-collapse border-slate-800 rounded-full shadow-md shadow-cyan-600 hover:-translate-y-2" href="#" data-aos="fade-up">
                    <i class="fa-brands fa-react px-2 py-2"></i>
                    <p class="py-2 pr-2 font-poppins">React Native</p>
                </a>
                <a class="relative flex-row flex justify-center items-center border-collapse border-slate-800 rounded-full shadow-md shadow-cyan-600 hover:-translate-y-2" href="#" data-aos="fade-down">
                    <i class="fa-brands fa-git-alt px-2 py-2"></i>
                    <p class="py-2 pr-2 font-poppins">GIT</p>
                </a>
                <a class="relative flex-row flex justify-center items-center border-collapse border-slate-800 rounded-full shadow-md shadow-cyan-600 hover:-translate-y-2" href="#" data-aos="fade-up">
                    <i class="fa-brands fa-github px-2 py-2"></i>
                    <p class="py-2 pr-2 font-poppins">Github</p>
                </a>
                <a class="relative flex-row flex justify-center items-center border-collapse border-slate-800 rounded-full shadow-md shadow-cyan-600 hover:-translate-y-2" href="#" data-aos="fade-down">
                    <i class="fa-brands fa-unity px-2 py-2"></i>
                    <p class="py-2 pr-2 font-poppins">Unity</p>
                </a>
                <a class="relative flex-row flex justify-center items-center border-collapse border-slate-800 rounded-full shadow-md shadow-cyan-600 hover:-translate-y-2" href="#" data-aos="fade-up">
                    <i class="fa-brands fa-docker px-2 py-2"></i>
                    <p class="py-2 pr-2 font-poppins">Docker</p>
                </a>
                <a class="relative flex-row flex justify-center items-center border-collapse border-slate-800 rounded-full shadow-md shadow-cyan-600 hover:-translate-y-2" href="#" data-aos="fade-down">
                    <i class="fa-brands fa-figma px-2 py-2"></i>
                    <p class="py-2 pr-2 font-poppins">Figma</p>
                </a>
            </div>
        </div>
    </div>

    <div class="relative flex flex-col items-center py-6">
        <h2 class="text-cyan-300 font-batuphat text-3xl max-sm:text-1xl py-5"  data-aos="fade-down">
            My Portfolio
        </h2>
            <div class="grid grid-cols-4 gap-4 max-[900px]:grid-cols-2 max-[380px]:grid-cols-1 mx-2">
                <div class="relative flex flex-col max-[500px]:w-44 max-[500px]:h-44 w-56 h-56" data-aos="zoom-out-up">
                    <a href="https://pplk2022.com" target="_blank" class="flex flex-col max-[500px]:w-44 max-[500px]:h-44 w-56 h-56 justify-center items-center card-block no-underline shadow">
                        <img src="./assets/PPLK.png" class="mt-3 px-1 object-cover w-52 h-32 max-sm:w-40 max-sm:h-20 shadow" alt="🖼️">
                        <div class="card-body flex flex-col">
                            <h5 class="card-title text-center text-cyan-300 font-bold">Front-End PPLK 2022</h5>
                        </div>
                    </a>
                </div>
                <div class="relative flex flex-col max-[500px]:w-44 max-[500px]:h-44 w-56 h-56" data-aos="zoom-out-down">
                    <a href="https://ardhames.itch.io/itera-adventure-2" class="flex flex-col max-[500px]:w-44 max-[500px]:h-44 w-56 h-56 justify-center items-center card-block no-underline shadow">
                        <img src="./assets/WhatsApp Image 2022-08-10 at 23.18.08.jpeg" class="mt-3 px-1 object-cover w-52 h-32 max-sm:w-40 max-sm:h-20 shadow" alt="🖼️">
                        <div class="card-body flex flex-col">
                            <h5 class="card-title text-center text-cyan-300 font-bold">Game Co-Programmer</h5>
                        </div>
                    </a>
                </div>
                <div class="relative flex flex-col max-[500px]:w-44 max-[500px]:h-44 w-56 h-56" data-aos="zoom-out-up">
                    <a href="https://roastingmen.com/" class="flex flex-col max-[500px]:w-44 max-[500px]:h-44 w-56 h-56 justify-center items-center card-block no-underline shadow">
                        <img src="./assets/Roastingmen.png" class="mt-3 px-1 object-cover w-52 h-32 max-sm:w-40 max-sm:h-20 shadow" alt="🖼️">
                        <div class="card-body flex flex-col">
                            <h5 class="card-title text-center text-cyan-300 font-bold">Front-End Web</h5>
                        </div>
                    </a>
                </div>
                <div class="relative flex flex-col max-[500px]:w-44 max-[500px]:h-44 w-56 h-56" data-aos="zoom-out-down">
                    <a href="https://github.com/adislksn/FastLink-Expo" class="flex flex-col max-[500px]:w-44 max-[500px]:h-44 w-56 h-56 justify-center items-center card-block no-underline shadow">
                        <img src="./assets/Screenshot_com.fastlink.jpg" class="mt-3 px-1 object-cover w-52 h-32 max-sm:w-40 max-sm:h-20 shadow" alt="🖼️">
                        <div class="card-body flex flex-col">
                            <h5 class="card-title text-center text-cyan-300 font-bold">Mobile Apps</h5>
                        </div>
                    </a>
                </div>

                <div class="relative flex flex-col max-[500px]:w-44 max-[500px]:h-44 w-56 h-56" data-aos="zoom-out-up">
                    <a href="https://www.figma.com/proto/sHc3sqPtuJ7BrGpKigK2Is/bangun.id-v-2?node-id=666%3A1298&scaling=scale-down&page-id=527%3A7&starting-point-node-id=666%3A1298" class="flex flex-col max-[500px]:w-44 max-[500px]:h-44 w-56 h-56 justify-center items-center card-block no-underline shadow">
                        <img src="./assets/Bangun-id.png" class="mt-3 px-1 object-cover w-52 h-32 max-sm:w-40 max-sm:h-20 shadow" alt="🖼️">
                        <div class="card-body flex flex-col">
                            <h5 class="card-title text-center text-cyan-300 font-bold">TOP 200 Mockup IDT by BUMN</h5>
                        </div>
                    </a>
                </div>
                <div class="relative flex flex-col max-[500px]:w-44 max-[500px]:h-44 w-56 h-56" data-aos="zoom-out-down">
                    <a href="https://www.figma.com/proto/eKu2A3gwyt7R9eGQ5gaIwt/PresLab-SKPL?node-id=1%3A2&scaling=scale-down&page-id=0%3A1&starting-point-node-id=1%3A2" class="flex flex-col max-[500px]:w-44 max-[500px]:h-44 w-56 h-56 justify-center items-center card-block no-underline shadow">
                        <img src="./assets/PresLab.png" class="mt-3 px-1 object-cover w-52 h-32 max-sm:w-40 max-sm:h-20 shadow" alt="🖼️">
                        <div class="card-body flex flex-col">
                            <h5 class="card-title text-center text-cyan-300 font-bold">Preslab Mockup SKPL</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="relative bg-zinc-300 flex flex-col items-start max-sm:items-center">
            <h2 class="text-slate-800 font-batuphat text-3xl max-sm:text-1xl py-5 self-center"  data-aos="fade-up">
                My Career Tracks
            </h2>
            <div class="py-4 pl-36 max-sm:pl-0 max-sm:self-center">
                <ol class="relative border-l border-cyan-800">                  
                    <li class="mb-10 ml-4">
                        <div class="absolute w-3 h-3 bg-cyan-200 rounded-full mt-1.5 -left-1.5 border border-cyan-300"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-slate-700">May 2022</time>
                        <h3 class="text-lg font-semibold text-gray-900">Head of Front-End Web Dev (PPLK)</h3>
                        <p class="mb-4 text-base font-normal text-slate-800">Campus Environment Introduction Program</p>
                        <a href="https://pplk2022.com" target="_blank" class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-cyan-600 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-cyan-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                            View Project 
                            <svg class="ml-2 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="mb-10 ml-4">
                        <div class="absolute w-3 h-3 bg-cyan-200 rounded-full mt-1.5 -left-1.5 border border-cyan-300"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-slate-700">November 2018</time>
                        <h3 class="text-lg font-semibold text-gray-900">Head of Event Division</h3>
                        <p class="text-base font-normal text-slate-800">Highschool Orientation of SMA N 5</p>
                    </li>
                    <li class="mb-10 ml-4">
                        <div class="absolute w-3 h-3 bg-cyan-200 rounded-full mt-1.5 -left-1.5 border border-cyan-300"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-slate-700">August 2018</time>
                        <h3 class="text-lg font-semibold text-gray-900">Chairman of Organization</h3>
                        <p class="text-base font-normal text-slate-800">Youth Science Club SMA N 5</p>
                    </li>
                    <li class="ml-4">
                        <div class="absolute w-3 h-3 bg-cyan-200 rounded-full mt-1.5 -left-1.5 border border-cyan-300"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-slate-700">September 2017</time>
                        <h3 class="text-lg font-semibold text-gray-900">Head of Environment Division</h3>
                        <p class="text-base font-normal text-slate-800">Youth Science Club SMA N 5</p>
                    </li>
                </ol>
            </div>
        </div>

    <div class="relative py-4 pb-10">
        <h2 class="text-cyan-300 font-batuphat text-3xl max-sm:text-1xl py-5 text-center">
            My Hobbies
        </h2>
        <div class="image-custom relative">
            <img src="assets/photo_2022-01-25_02-41-36.jpg" alt="🖼️">
            <img src="assets/photo_2022-01-25_02-41-41.jpg" alt="🖼️">
            <img src="assets/photo_2022-01-25_02-41-47.jpg" alt="🖼️">
            <img src="assets/Dark_Raizel.png" alt="🖼️">
            <img src="assets/photo_2022-02-06_03-20-16.jpg" alt="🖼️">
            <img src="assets/Neon_Raizel.png" alt="🖼️">
            <img src="assets/photo_2022-01-26_23-28-51.jpg" alt="🖼️">
            <img src="assets/photo_2022-01-26_23-29-02.jpg" alt="🖼️">
            <img src="assets/photo_2022-01-26_23-29-07.jpg" alt="🖼️">
        </div>
    </div>

    <footer class="bottom-0 bg-cyan-600 relative flex flex-row items-center px-10 h-24 justify-between">
        <div>
            <a class="min-[624px]:px-2" href="https://www.linkedin.com/in/adislksn/" target="_blank">
                <i class="fa-brands fa-linkedin text-4xl hover:text-white cursor-pointer"></i>
            </a>
            <a class="min-[624px]:px-2" href="https://www.instagram.com/in/adislksn/" target="_blank">
                <i class="fa-brands fa-instagram text-4xl hover:text-white cursor-pointer"></i>
            </a>
            <a class="min-[624px]:px-2" href="https://www.github.com/in/adislksn/" target="_blank">
                <i class="fa-brands fa-square-github text-4xl hover:text-white cursor-pointer"></i>
            </a>
            <a class="min-[624px]:px-2" href="mailto:adislksn@gmail.com" target="_blank">
                <i class="fa-solid fa-envelope text-4xl hover:text-white cursor-pointer"></i>
            </a>
        </div>
        <div class="">
            <svg class="self-end" width="40" height="24" viewBox="0 0 21 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.271 3.90633C16.4898 3.63728 15.8002 3.15351 15.2814 2.5105C14.7096 1.79408 13.9815 1.21793 13.1528 0.82615C12.3241 0.434366 11.4167 0.237319 10.5002 0.250084C9.26721 0.162767 8.0466 0.543048 7.08142 1.3152C6.11623 2.08734 5.47729 3.1947 5.29183 4.41675C5.65711 3.80555 6.20689 3.32599 6.86203 3.04708C7.51718 2.76818 8.24391 2.70431 8.93766 2.86467C9.71755 3.14155 10.406 3.62814 10.9272 4.27092C11.5022 4.98162 12.2317 5.55181 13.0602 5.93809C13.8888 6.32438 14.7945 6.51659 15.7085 6.50008C16.9414 6.5874 18.1621 6.20712 19.1272 5.43497C20.0924 4.66282 20.7314 3.55546 20.9168 2.33342C20.5582 2.95193 20.0102 3.43873 19.3537 3.72196C18.6972 4.00519 17.967 4.06983 17.271 3.90633ZM3.72933 9.09383C4.51052 9.36289 5.20008 9.84666 5.71891 10.4897C6.29074 11.2061 7.01885 11.7822 7.84756 12.174C8.67626 12.5658 9.5836 12.7628 10.5002 12.7501C11.7331 12.8374 12.9537 12.4571 13.9189 11.685C14.8841 10.9128 15.523 9.80546 15.7085 8.58342C15.3432 9.19462 14.7934 9.67418 14.1383 9.95309C13.4831 10.232 12.7564 10.2959 12.0627 10.1355C11.2828 9.85862 10.5943 9.37203 10.0731 8.72925C9.49658 8.02031 8.76678 7.45137 7.93861 7.06525C7.11044 6.67913 6.20548 6.4859 5.29183 6.50008C4.05888 6.41277 2.83827 6.79305 1.87309 7.5652C0.9079 8.33734 0.268957 9.4447 0.0834961 10.6668C0.442149 10.0482 0.990171 9.56143 1.64666 9.27821C2.30314 8.99498 3.0333 8.93034 3.72933 9.09383Z" fill="black"/>
            </svg>
            <p>Supported by Tailwind</p>
        </div>
    </footer>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MONO | Ultra-Minimalist Luxury</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300&amp;family=Inter:wght@200;300;400&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary": "#000000",
                        "mono-bg": "#ffffff",
                    },
                    fontFamily: {
                        "serif": ["'Cormorant Garamond'", "serif"],
                        "sans": ["'Inter'", "sans-serif"]
                    },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            background-color: #ffffff;
            color: #000000;
        }
        .nav-link {
            @apply text-[9px] uppercase tracking-[0.4em] font-light transition-opacity hover:opacity-50;
        }
        .editorial-image {
            filter: grayscale(100%);
            transition: filter 0.5s ease;
        }
        .editorial-image:hover {
            filter: grayscale(0%);
        }
    </style>
</head>

<body class="bg-white text-black">
    <nav class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-sm">
        <div class="max-w-screen-2xl mx-auto px-12 py-10 flex flex-col items-center">
            <a class="text-xl font-light tracking-[0.6em] mb-8 font-serif" href="#">MONO</a>
            <div class="flex space-x-12">
                <a class="nav-link" href="#">Collection</a>
                <a class="nav-link" href="#">Archive</a>
                <a class="nav-link" href="#">Editorial</a>
                <a class="nav-link" href="#">Profile</a>
            </div>
        </div>
    </nav>
    <main class="pt-64 pb-32">
        <section class="max-w-screen-xl mx-auto px-12">
            <div class="flex flex-col items-center">
                <div class="w-full max-w-[800px] mb-24 overflow-hidden bg-neutral-50">
                    <img alt="Editorial monochrome fashion" class="editorial-image w-full h-[85vh] object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBwLN6-9tqWY7l6Zel9u3jN2wZ2_76kk-XHh4I_kdmVd_1L0-sYK9W2smh_W2wDOeEV9vUErJ8-_YSjVbSc46GzPkuyIsRJxFC18mtEUgxloj9S30SkCtx2k-lczqR6go7I_5uE1gcYtUrYKz2I4ZR7GuMYPhPIrY5AQlRqKKG9kPDew_AU8MQKqnsOTENHH6znYNYxoN8ORoZwX0pedEisJrEmgh6zKOSS2uBwDMAitj2Ij4KVutaQPn5KO-lvlCrHXJXehsQFACY" />
                </div>
                <div class="text-center max-w-2xl">
                    <span class="text-[9px] uppercase tracking-[0.5em] text-neutral-400 block mb-6">Autumn Winter 2024</span>
                    <h1 class="font-serif text-5xl md:text-6xl font-light leading-tight mb-10 italic">The Silence of Form</h1>
                    <p class="font-sans text-xs tracking-widest text-neutral-500 leading-relaxed max-w-md mx-auto mb-16 uppercase">
                        Exploring the boundaries between shadow and textile. A study in absolute minimalism.
                    </p>
                    <a class="inline-block text-[9px] uppercase tracking-[0.5em] border-b border-black pb-2 transition-opacity hover:opacity-40" href="#">View Series</a>
                </div>
            </div>
        </section>
        <section class="mt-80 max-w-screen-xl mx-auto px-12">
            <div class="grid grid-cols-12 gap-24 items-center">
                <div class="col-span-12 lg:col-span-5">
                    <h2 class="font-serif text-4xl font-light italic mb-8">Pure Essentials</h2>
                    <p class="font-sans text-sm text-neutral-500 leading-loose mb-12">
                        Crafted from the finest organic fibers, our core collection represents a lifetime of refinement. We believe that what is removed is just as important as what remains.
                    </p>
                    <div class="flex space-x-8">
                        <a class="nav-link" href="#">Women</a>
                        <a class="nav-link" href="#">Men</a>
                        <a class="nav-link" href="#">Unisex</a>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-7">
                    <div class="bg-neutral-50 p-16">
                        <img alt="Detailed fabric shot" class="editorial-image w-full aspect-[4/5] object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAe8aTjCmOAyBDYiSQhnByWGU6mScLLsbQg7dpwcQoPZx1mIyMNLy2b7Wyz2Gv4QyzFjfwqdSxGH6AcvoyozbA8aPCBB9WaSAN6qQ8ouH5x9WqhTjY6TemsGEUSz3vNpfrWAVhGETvmpDVNOwFUsF7Xm2N0nsSRJJ-fqNQikGgRHEnrt7tbCWtUfqLXGLrblMBEKpJ3isYMdVNBLOV-N35mF0_k5pqLQhbCzd742hh3USZLYqgKK-w74EWSYsqsjiI9rqAqfFsZmXI" />
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-80 py-40 flex flex-col items-center bg-neutral-50/30">
            <div class="max-w-lg text-center px-12">
                <h3 class="font-serif text-3xl font-light mb-8 italic">The Newsletter</h3>
                <p class="font-sans text-[10px] tracking-[0.2em] uppercase text-neutral-400 mb-12">Curated selections delivered sparingly.</p>
                <form class="w-full flex border-b border-black/10 pb-2">
                    <input class="w-full bg-transparent border-none text-[10px] uppercase tracking-[0.3em] placeholder:text-neutral-300 focus:ring-0 px-0" placeholder="Email address" type="email" />
                    <button class="text-[9px] uppercase tracking-[0.4em] ml-4 hover:opacity-40 transition-opacity" type="submit">Join</button>
                </form>
            </div>
        </section>
    </main>
    <footer class="py-24 px-12 border-t border-neutral-50">
        <div class="max-w-screen-2xl mx-auto flex flex-col md:flex-row justify-between items-start md:items-center">
            <div class="mb-12 md:mb-0">
                <a class="text-sm font-light tracking-[0.4em] font-serif mb-4 block" href="#">MONO</a>
                <p class="text-[8px] uppercase tracking-[0.3em] text-neutral-400">© 2024 Studio Mono. All rights reserved.</p>
            </div>
            <div class="flex flex-wrap gap-x-12 gap-y-4">
                <a class="nav-link" href="#">Legal</a>
                <a class="nav-link" href="#">Stockists</a>
                <a class="nav-link" href="#">Journal</a>
                <a class="nav-link" href="#">Contact</a>
            </div>
            <div class="flex space-x-6 mt-12 md:mt-0">
                <a class="material-symbols-outlined text-sm font-light" href="#">shopping_bag</a>
                <a class="material-symbols-outlined text-sm font-light" href="#">search</a>
            </div>
        </div>
    </footer>

</body>

</html>
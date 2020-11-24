<template>
    <main id="app" class="container max-w-full main-color">
        <div class="flex main-color lg:mx-auto justify-center path-2-bg p-5">
            <div class="flex-1 lg:max-w-lg">
                <img src="./pict/home-pict.svg" alt="" />
            </div>

            <div class="p-4 flex-2 my-5">
                <div class="my-5">
                    <h1 class="text-4xl my-5">
                        Cari lomba-lomba <br />
                        <span class="underline"> kesukaanmu!</span>
                    </h1>
                    <p class="mt-8 font-semibold text-gray-900">
                        Cariin adalah platform online yang didesain khusus
                        <br />
                        agar memberikan kemudahan kepada pengguna dalam mencari
                        lomba <br />
                        serta mencari tim.
                    </p>
                    <div class="mt-4">
                        <base-button type="button">Lomba</base-button>
                        <base-button>Tentang Kami</base-button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex secondary-color lg:mx-auto justify-center">
            <div class="flex-2 my-auto">
                <div class="p-10 sm:mt-5">
                    <div class="m-4">
                        <p class="sm:mt-5 text-gray-700">PLATFORM LOMBA NO 1</p>
                        <h1 class="text-4xl">
                            Dimana Komunitas dan <br />
                            Peyelenggara Lomba <br />
                            Bertemu
                        </h1>
                        <p class="mt-4 text-gray-900 font-semibold">
                            Rasakan pengalaman yang terbaik dalam menemukan
                            lomba.
                            <br />
                            Dimana lomba lebih dari sekedar lomba! <br />
                            Salam Kompetitif!
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex-1 lg:max-w-lg mt-10">
                <img src="./pict/winner.svg" alt="" />
            </div>
        </div>
        <div class="flex p-14 justify-center px-4 mx-10">
            <img src="./pict/question.svg" alt="test" class="w-20 md:w-36" />
            <h1 class="lg:text-3xl my-auto text-xl ml-2">
                Apa Pendapat <br />
                Orang Tentang Cariin ?
            </h1>
        </div>
        <div
            class="flex justify-center secondary-color my-auto p-10 flex-col sm:flex-row"
        >
            <div class="flex items-center justify-center p-2 my-auto">
                <div
                    class="w-full mx-auto rounded-lg bg-white shadow-lg px-5 pt-5 pb-10 text-gray-800"
                    style="max-width: 500px"
                >
                    <div class="w-full mb-10">
                        <div
                            class="text-3xl text-indigo-500 text-left leading-tight h-3"
                        >
                            “
                        </div>
                        <p class="text-sm text-gray-600 text-center px-5">
                            Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Nam obcaecati laudantium recusandae, debitis
                            eum voluptatem ad, illo voluptatibus temporibus odio
                            provident.
                        </p>
                        <div
                            class="text-3xl text-indigo-500 text-right leading-tight h-3 -mt-3"
                        >
                            ”
                        </div>
                    </div>
                    <div class="w-full">
                        <p
                            class="text-md text-indigo-500 font-bold text-center"
                        >
                            Reyhan Naufal
                        </p>
                        <p class="text-xs text-gray-500 text-center">
                            @reyhannaufal
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center p-2 my-auto">
                <div
                    class="w-full mx-auto rounded-lg bg-white shadow-lg px-5 pt-5 pb-10 text-gray-800"
                    style="max-width: 500px"
                >
                    <div class="w-full mb-10">
                        <div
                            class="text-3xl text-indigo-500 text-left leading-tight h-3"
                        >
                            “
                        </div>
                        <p class="text-sm text-gray-600 text-center px-5">
                            Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Nam obcaecati laudantium recusandae, debitis
                            eum voluptatem ad, illo voluptatibus temporibus odio
                            provident.
                        </p>
                        <div
                            class="text-3xl text-indigo-500 text-right leading-tight h-3 -mt-3"
                        >
                            ”
                        </div>
                    </div>
                    <div class="w-full">
                        <p
                            class="text-md text-indigo-500 font-bold text-center"
                        >
                            Abdun Rauf
                        </p>
                        <p class="text-xs text-gray-500 text-center">
                            @abdun.rauf
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {};
</script>

<style>
.path-bg {
    clip-path: polygon(0 24%, 100% 0, 100% 100%, 0% 100%);
}

.path-2-bg {
    clip-path: polygon(200%, 100% 0, 100% 100%, 0% 100%);
}

.underline {
    text-decoration-line: underline;
    text-decoration-style: solid;
    text-decoration-color: var(--third-bg-color);
    text-decoration-thickness: 15px;
}
</style>

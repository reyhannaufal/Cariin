<template>
    <main id="app" class="container max-w-full main-color">
        <div class="flex main-color lg:mx-auto justify-center path-2-bg">
            <div class="flex-1 lg:max-w-lg">
                <img src="./computer.svg" alt="" />
            </div>
            <div class="flex-2"></div>
            <div class="p-4">
                <div>
                    <h1 class="text-4xl">Cari lomba-lomba <br />kesukaanmu!</h1>
                    <p class="mt-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        <br />
                        Deleniti, doloremque! <br />Optio aut illum nostrum
                        corporis quis quibusdam cumque itaque? Exercitationem.
                    </p>
                    <div class="mt-4">
                        <base-button>Lomba</base-button>
                        <base-button>Tentang Kami</base-button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex secondary-color lg:mx-auto justify-center path-bg">
            <div class="flex-2 my-auto">
                <div class="p-4">
                    <div class="mt-10">
                        <p>PLATFORM LOMBA NO 1</p>
                        <h1 class="text-4xl">
                            Dimana Komunitas dan <br />
                            Peyelenggara Lomba <br />
                            Bertemu
                        </h1>
                        <p class="mt-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            <br />
                            Deleniti, doloremque! <br />Optio aut illum nostrum
                            corporis quis quibusdam cumque itaque?
                            Exercitationem.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex-1 lg:max-w-lg mt-10">
                <img src="./winner.svg" alt="" />
            </div>
        </div>
        <div class="flex p-5 justify-center px-4">
            <img src="./question.svg" alt="test" />
            <h1 class="text-4xl my-auto">
                Apa Pendapat <br />
                Orang Tentang Cariin ?
            </h1>
        </div>
        <div class="flex justify-center secondary-color my-auto p-10">
            <div class="flex items-center justify-center p-2 my-auto">
                <div
                    class="w-full mx-auto rounded-lg bg-white shadow-lg px-5 pt-5 pb-10 text-gray-800"
                    style="max-width: 500px"
                >
                    <div class="w-full pt-1 pb-5">
                        <div
                            class="overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg"
                        >
                            <img
                                src="https://randomuser.me/api/portraits/men/15.jpg"
                                alt=""
                            />
                        </div>
                    </div>
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
                            Scott Windon
                        </p>
                        <p class="text-xs text-gray-500 text-center">
                            @scott.windon
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center p-2 my-auto">
                <div
                    class="w-full mx-auto rounded-lg bg-white shadow-lg px-5 pt-5 pb-10 text-gray-800"
                    style="max-width: 500px"
                >
                    <div class="w-full pt-1 pb-5">
                        <div
                            class="overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg"
                        >
                            <img
                                src="https://randomuser.me/api/portraits/men/15.jpg"
                                alt=""
                            />
                        </div>
                    </div>
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
                            Scott Windon
                        </p>
                        <p class="text-xs text-gray-500 text-center">
                            @scott.windon
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
:root {
  --main-bg-color: #cbf3f0;
  --secondary-bg-color: #B1f2ed;
  --third-bg-color: #ff9f1c;
  --button-color: #2ec4b6;
}
</style>

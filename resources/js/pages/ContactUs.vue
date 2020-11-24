<template>
    <div
        class="relative flex justify-center min-h-screen main-color dark:bg-gray-900 sm:items-center sm:pt-0 my-auto"
    >
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-2 overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div
                        class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg"
                    >
                        <h1
                            class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight underline"
                        >
                            Kontak Kami
                        </h1>
                        <p
                            class="text-normal text-xl text-gray-600 dark:text-gray-400 mt-8 font-semibold"
                        >
                            hubungi kami untuk segala pertanyaan anda
                        </p>

                        <div
                            class="flex items-center mt-8 text-gray-600 dark:text-gray-400"
                        >
                            <svg
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                viewBox="0 0 24 24"
                                class="w-8 h-8 text-gray-500"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                                />
                            </svg>
                            <div
                                class="ml-4 text-md tracking-wide font-semibold w-40"
                            >
                                Kampus ITS Sukolilo, Surabaya 60111
                            </div>
                        </div>

                        <div
                            class="flex items-center mt-4 text-gray-600 dark:text-gray-400"
                        >
                            <svg
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                viewBox="0 0 24 24"
                                class="w-8 h-8 text-gray-500"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                />
                            </svg>
                            <div
                                class="ml-4 text-md tracking-wide font-semibold w-40"
                            >
                                +62 813-1628-6728
                            </div>
                        </div>

                        <div
                            class="flex items-center mt-2 text-gray-600 dark:text-gray-400"
                        >
                            <svg
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                viewBox="0 0 24 24"
                                class="w-8 h-8 text-gray-500"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                />
                            </svg>
                            <div
                                class="ml-4 text-md tracking-wide font-semibold w-40"
                            >
                                cariin@id
                            </div>
                        </div>
                    </div>

                    <form class="p-6 flex flex-col justify-center">
                        <div class="flex flex-col">
                            <label for="name" class="hidden"
                                >Nama Lengkap</label
                            >
                            <input
                                type="name"
                                name="name"
                                id="name"
                                placeholder="Nama Lengkap"
                                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none"
                            />
                        </div>

                        <div class="flex flex-col mt-2">
                            <label for="email" class="hidden">Email</label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                placeholder="Email"
                                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none"
                            />
                        </div>

                        <div class="flex flex-col mt-2">
                            <label for="tel" class="hidden">Nomer Telpon</label>
                            <input
                                type="tel"
                                name="tel"
                                id="tel"
                                placeholder="Nomer Telpon"
                                class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none"
                            />
                        </div>

                        <base-button
                            type="submit"
                            class="md:w-32 font-bold py-3 px-6 rounded-lg mt-3 hover:bg-white transition ease-in-out duration-300"
                        >
                            Kirim
                        </base-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import BaseButton from "../components/ui/BaseButton.vue";
export default {
    components: { BaseButton },
};
</script>

<style></style>

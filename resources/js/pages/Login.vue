<template>
    <div class="w-full flex flex-wrap secondry-bg-color">
        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col">
            <div
                class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32"
            >
                <p class="text-center text-3xl">Selamat Datang Kembali!</p>
                <form
                    class="flex flex-col pt-3 md:pt-8"
                    onsubmit="event.preventDefault();"
                >
                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg">Email</label>
                        <input
                            type="email"
                            id="email"
                            placeholder="your@email.com"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                        />
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg">Password</label>
                        <input
                            type="password"
                            id="password"
                            placeholder="Password"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                        />
                    </div>

                    <base-button class="mt-5">Masuk</base-button>
                </form>
                <div class="text-center pt-12 pb-5">
                    <p>Tidak Punya Akun?</p>
                </div>
                <router-link to="/api/register" class="btn-register text-center"
                    >Daftar Disini</router-link
                >
            </div>
        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img
                class="object-cover w-full h-screen hidden md:block"
                src="https://source.unsplash.com/IXUM4cJynP0"
            />
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style>
.btn-register {
    padding: 0.75rem 1.5rem;
    text-decoration: none;
    font: inherit;
    background-color: #2ec4b6;
    border: 1px solid #2ec4b6;
    color: white;
    cursor: pointer;
    border-radius: 30px;
    margin-right: 0.5rem;
    display: inline-block;
    color: #000;
}
</style>

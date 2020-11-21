<template>
    <div class="flex h-screen secondary-color">
        <div class="w-full max-w-xs m-auto main-color rounded-lg px-14 py-9">
            <header>
                <h1 class="text-4xl text-center mb-5">LOGO</h1>
            </header>
            <form>
                <div>
                    <label class="block mb-2 text-indigo-500" for="username"
                        >Nama</label
                    >
                    <input
                        class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                        type="text"
                        name="name"
                    />
                </div>
                <div>
                    <label class="block mb-2 text-indigo-500" for="username"
                        >Email</label
                    >
                    <input
                        class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                        type="text"
                        name="email"
                    />
                </div>
                <div>
                    <label class="block mb-2 text-indigo-500" for="password"
                        >Password</label
                    >
                    <input
                        class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                        type="password"
                        name="password"
                    />
                </div>
                <footer class="my-3">
                    <base-button class="mt-3" to="/api/register" link="true"
                        >DAFTAR</base-button
                    >
                </footer>
            </form>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style></style>

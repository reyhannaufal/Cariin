<template>
    <div class="w-full flex flex-wrap second-color">
        <div class="w-full md:w-1/2 flex flex-col">
            <div
                class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32"
            >
                <p class="text-center text-3xl">Silahkan Daftar Akun Anda</p>
                <form
                    class="flex flex-col pt-3 md:pt-8"
                    onsubmit="event.preventDefault();"
                >
                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg">Nama</label>
                        <input
                            type="nama"
                            id="nama"
                            placeholder="Nama"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                        />
                    </div>
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

                    <base-button
                        type="submit"
                        value="Daftar"
                        class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8"
                        >Daftar Sekarang!
                    </base-button>
                </form>
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
{
    const { default: BaseButton } = require("../components/ui/BaseButton.vue");

    // export default {
    //     data() {
    //         return {
    //             name: "",
    //             email: "",
    //             password: "",
    //             formIsValid: true,
    //             mode: "singup",
    //         };
    //     },
    //     methods: {
    //         async submitForm() {
    //             this.formIsValid = true;
    //             if (
    //                 this.email === "" ||
    //                 !this.email.includes("@") ||
    //                 this.password.length < 6
    //             ) {
    //                 this.formIsValid = false;
    //                 return;
    //             }
    //             const actionPayload = {
    //                 name: this.name,
    //                 email: this.email,
    //                 password: this.password,
    //             };
    //             try {
    //                 this.mode = "signup";
    //                 await this.$store.dispatch("signup", actionPayload);
    //             } catch (e) {
    //                 console.error(e);
    //             }
    //         },
    //     },
}
</script>

<style></style>

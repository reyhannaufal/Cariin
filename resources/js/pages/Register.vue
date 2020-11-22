<template>
    <div class="flex h-screen secondary-color">
        <div class="w-full max-w-xs m-auto main-color rounded-lg px-14 py-9">
            <header>
                <h1 class="text-4xl text-center mb-5">LOGO</h1>
            </header>
            <form @submit.prevent="submitform">
                <div class="form-control">
                    <label class="block mb-2 text-indigo-500" for="username"
                        >Nama</label
                    >
                    <input
                        class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                        type="text"
                        name="name"
                        v-model.trim="name"
                    />
                </div>
                <div class="form-control">
                    <label class="block mb-2 text-indigo-500" for="username"
                        >Email</label
                    >
                    <input
                        class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                        type="email"
                        name="email"
                        v-model.trim="email"
                    />
                </div>
                <div class="form-control">
                    <label class="block mb-2 text-indigo-500" for="password"
                        >Password</label
                    >
                    <input
                        class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300"
                        type="password"
                        name="password"
                        v-model.trim="password"
                    />
                </div>
                <p v-if="!formIsValid">
                    Please enter a valid email and password (must be at least 6
                    characters long).
                </p>
                <footer class="my-2">
                    <base-button type="submit" @click="submitform"
                        >Daftar Sekarang!</base-button
                    >
                </footer>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: "",
            email: "",
            password: "",
            formIsValid: true,
            mode: "singup",
        };
    },
    methods: {
        async submitForm() {
            this.formIsValid = true;

            if (
                this.email === "" ||
                !this.email.includes("@") ||
                this.password.length < 6
            ) {
                this.formIsValid = false;
                return;
            }

            const actionPayload = {
                name: this.name,
                email: this.email,
                password: this.password,
            };

            try {
                this.mode = "signup";
                await this.$store.dispatch("signup", actionPayload);
            } catch (e) {
                console.error(e);
            }
        },
    },
};
</script>

<style></style>

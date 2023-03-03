<template>
    <nav class="ml-auto">
        <ul class="flex list-none space-x-4 list-inside">
            <div class="border-solid border-gray-500 border-l p-2 ">
                <li><Link href="/" class="pl-4 text-black text-xl hover:text-gray-700" :class="{'': $page.component === 'Home'}">Skelbimai</Link></li>
            </div>
            <div class="border-solid border-gray-500 border-l p-2">
                <li><Link href="/users" class=" pl-4 text-black text-xl hover:text-gray-700" :class="{'': $page.component === 'Users'}">Prisijungti</Link></li>
            </div>
            <div class="border-solid border-gray-500 border-l p-2">
                <li><Link href="/settings" class=" pl-4 text-black text-xl hover:text-gray-700" :class="{'': $page.component === 'Settings'}">Pridėti skelbimą</Link></li>
            </div>
        </ul>
    </nav>
</template>

<script>
import { Link } from '@inertiajs/vue3';
export default {
    components: { Link },
};
</script>
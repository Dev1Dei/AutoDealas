<template>
    <nav class="ml-6">
        <ul class="flex list-disc space-x-4 list-inside">
            <li>
                <Link href="/" class="text-black hover:text-gray-700" :class="{'font-bold bg-white border-2 border-solid border-red-500 ': $page.component === 'Home'}">Home</Link></li>
            <li><Link href="/users" class="text-black-700 hover:text-gray-700" :class="{'font-bold bg-white border-2 border-solid border-red-500 ': $page.component === 'Users'}" >Users</Link></li>
            <li><Link href="/settings" class="text-black-700 hover:text-gray-700" :class="{'font-bold bg-white border-2 border-solid border-red-500 ': $page.component === 'Settings'}">Settings</Link></li>
        </ul>
    </nav>
</template>

<script>
import { Link } from '@inertiajs/vue3';
export default {
    components: { Link },
};
</script>
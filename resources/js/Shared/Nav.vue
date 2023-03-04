<template>
    <nav class="ml-auto">
        <ul class="flex list-none space-x-4 list-inside">
            <div class="border-solid border-gray-500 border-l p-2 ">
                <li><Link href="/listings" class="pl-4 text-black text-xl hover:text-gray-700" :class="{'': $page.component === 'Listings'}">Skelbimai</Link></li>
            </div>
            <div class="border-solid border-gray-500 border-l p-2">
                <li><Link href="/prisijungti" class=" pl-4 text-black text-xl hover:text-gray-700" :class="{'': $page.component === 'Prisijungti'}">Prisijungti</Link></li>
            </div>
            <div class="border-solid border-gray-500 border-l p-2">
                <li><Link href="/newlisting" class=" pl-4 text-black text-xl hover:text-gray-700" :class="{'': $page.component === 'NewListing'}">Pridėti skelbimą</Link></li>
            </div>
        </ul>
    </nav>
</template>

<script>

export default {
    components: { },
};
</script>
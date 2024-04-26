<div id="form"
    class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center scale-0 duration-300">
    <form method="POST" action=""
    id="form" class="bg-orange-700 w-[50%] p-5 rounded-lg shadow-md" enctype="multipart/form-data">
    @csrf
    <div class="flex mr-3 mt-3 justify-end">
        <svg id="closeForm" class="w-6 h-6 mb-5 text-white dark:text-white cursor-pointer" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
    </div>
    <select id="underline_select" name="categorie_id"
        class="block w-full py-2.5 px-4 mb-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500">
        <option selected disabled>Choix de Categorie</option>
        <option value="1">1</option>
    </select>

    <label for="file" class="block mb-2 text-sm font-medium text-white">Upload file</label>
    <input type="file" id="file" name="image"
        class="block w-full py-2.5 px-4 mb-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500">

    <label for="message" class="block mb-2 text-sm font-medium text-white">Ajouter une
        description</label>
    <textarea id="message" name="description" rows="4"
        class="block w-full py-2.5 px-4 mb-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500"
        placeholder="Write your thoughts here..."></textarea>

    <button type="submit"
        class="w-full py-2.5 px-4 bg-orange-600 hover:bg-orange-700 text-white font-semibold rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50">Submit</button>
</form>
</div>

<script>
    const btn = document.getElementById('btn');
    const form = document.getElementById('form');
    const closeForm = document.getElementById('closeForm');

    btn.addEventListener('click', () => {
        form.classList.add("scale-100");
        form.classList.remove("scale-0");
    });
    closeForm.addEventListener('click', () => {
        form.classList.remove("scale-100");
        form.classList.add("scale-0");
    });
</script>
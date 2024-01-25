@vite('resources/css/app.css')

<h2 class="font-semibold text-xl text-dark dark:text-gray-200 leading-tight">
    In project folder
    {{ ('Dashboard') }}
</h2>

<div class="py-12 bg-black">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-white-800 overflow-hidden shadow-sm sm:rounded-lg">

            <form action="{{ route('url.store') }}" method="POST">
            @csrf
                <div class="space-y-12 p-10">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Upload een project</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Let op vul hier zorgvuldig de informatie van het project in.</p>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="projectTitle" class="block text-sm font-medium leading-6 text-gray-900">Project titel</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <input type="text" name="username" id="username" autocomplete="projectTitle" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Titel van het project">
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="projectAbout" class="block text-sm font-medium leading-6 text-gray-900">About</label>
                                <div class="mt-2">
                                    <textarea id="projectAbout" name="projectAbout" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Schrijf hier iets over het project"></textarea>
                                </div>
                            </div>

                            <div class="mt-6 flex items-center justify-end gap-x-6">
                                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                            </div>

            </form>
        </div>
    </div>
</div>
<div>
    <x-navbar />

    <div class="container mx-auto mt-5">
        <div class="grid grid-cols-8 gap-5">
            <livewire:container-search />

            <livewire:container-list lazy />

            <div class="col-start-7 col-span-8">
                <div class="text-center">
                    ACHIEVS
                </div>
            </div>
        </div>
    </div>

    <livewire:form-modal />

    <livewire:warning-modal />
</div>

<x-AppLayout>
    @php
        $color = 'red';
        $alert = "alert2"
    @endphp
    
    <div class="container mx-auto mt-5">
        <x-alert :color="$color" class="mb-4">
            <x-slot name="title">
                Titulo 1

            </x-slot>
            
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum excepturi ex inventore dolore officia adipisci quisquam necessitatibus reprehenderit, debitis deserunt eaque officiis atque aspernatur est enim eum velit nisi sed?
        </x-alert>

        <x-dynamic-component :component="$alert">
            <x-slot name="title">
                Titulo 1
            </x-slot>
            
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum excepturi ex inventore dolore officia adipisci quisquam necessitatibus reprehenderit, debitis deserunt eaque officiis atque aspernatur est enim eum velit nisi sed?
        </x-dynamic-component>
    </div>
</x-AppLayout>
<x-layout>
    <div class="container mt-5">
        <div class="row align-items-md-stretch">

            <x-jumbotron>
                <div class="h-100 p-5 text-bg-dark rounded-3">
                    <h2>Change the background</h2>
                    <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look.
                        Then, mix and match with additional component themes and more.</p> <button
                        class="btn btn-outline-light" type="button">Example button</button>
                </div>
            </x-jumbotron>

            <x-jumbotron>
                <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                    <h2>Add borders</h2>
                    <p>Or, keep it light and add a border for some added definition to the boundaries of your content.
                        Be
                        sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing
                        of
                        both column's content for equal-height.</p> <button class="btn btn-outline-secondary"
                        type="button">Example button</button>
                </div>
            </x-jumbotron>
            <x-jumbotron>
                <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                    <h2>Add borders</h2>
                    <p>Or, keep it light and add a border for some added definition to the boundaries of your content.
                        Be
                        sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing
                        of
                        both column's content for equal-height.</p> <button class="btn btn-outline-secondary"
                        type="button">Example button</button>
                </div>
            </x-jumbotron>
            <x-jumbotron>
                <div class="h-100 p-5 text-bg-dark border rounded-3">
                    <h2>Add borders</h2>
                    <p>Or, keep it light and add a border for some added definition to the boundaries of your content.
                        Be
                        sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing
                        of
                        both column's content for equal-height.</p> <button class="btn btn-outline-secondary"
                        type="button">Example button</button>
                </div>
            </x-jumbotron>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row row-cols-2 row-cols-md-4 g-4">
            @foreach ($cards as $card)
                <div class="col">
                    <x-card :card="$card" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>

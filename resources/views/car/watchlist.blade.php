<x-app-layout bodyClass="page-my-cars">
    <main>
        <!-- New Cars -->
        <section>
            <div class="container">
                <div class="flex justify-between items-center">
                    <h2>My Favourite Cars</h2>
                    @if ($cars->total() > 0)
                        <div class="pagination-summary">
                            <p>
                                Showing {{ $cars->firstItem() }} to {{ $cars->lastItem() }} of {{ $cars->total() }} cars
                                in your favourite list.
                            </p>
                        </div>
                    @endif
                </div>

                <div class="car-items-listing">
                    @forelse ($cars as $car)
                        <x-car-item :car="$car" :isFavourite="true" />
                    @empty
                        <h2> You don't have any cars in Favourite list.</h2>
                    @endforelse

                </div>

                <!-- pagination  -->
                {{ $cars->onEachSide(1)->links('pagination') }}
                <!-- / pagination  -->
            </div>
        </section>
        <!--/ New Cars -->
    </main>
</x-app-layout>
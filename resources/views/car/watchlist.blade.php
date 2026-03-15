<x-app-layout title="Favourite Cars">
  <main>
    <!-- Voitures neuves -->
    <section>
      <div class="container">
        <div class="flex justify-between items-center">
          <h2>My favourite cars</h2>
          @if ($cars->total() > 0)
            <div class="pagination-summary">
              <p>
                Displaying {{ $cars->firstItem() }} to
                {{ $cars->lastItem() }} of {{ $cars->total() }} results
              </p>
            </div>
          @endif
        </div>
        <div class="car-items-listing">
          @foreach ($cars as $car)
            <x-car-item :$car :isInWatchlist="true" />
          @endforeach
        </div>

        @if ($cars->count() === 0)
          <div class="text-center p-large">
            You don't have any favourite cars yet. <a href="{{ route('car.index') }}">Explore cars</a>
          </div>
        @endif

        {{ $cars->onEachSide(1)->links() }}
      </div>
    </section>
  </main>
</x-app-layout>

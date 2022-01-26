@props(['practice'])

<article>
    <div class="is-flex is-flex-direction-column is-justify-content-center">
        {{--Practice info--}}
        <div class="card my-3">
            <header class="card-header has-background-primary-dark">
                <h2 class="card-header-title has-text-light">
                    {{ $practice->domain->name }}
                </h2>
            </header>
            <div class="card-content">
                <section class="content has-text-justified">
                    <div>
                        {{ $practice->description }}
                    </div>
                    <div class="mt-3 grid auto-rows-auto justify-items-end">
                        <div class="tags has-addons mb-0">
                            <span class="tag is-dark">Etat</span>
                            <span class="tag is-info">{{ $practice->publicationState->name }}</span>
                        </div>

                        <em>Crée le
                            <time datetime="{{ $practice->created_at->format('Y-m-d') }}">
                                {{ $practice->created_at->isoFormat('LL') }}
                            </time>
                        </em>
                        <br>
                        <em>Modifié le
                            <time datetime="{{ $practice->updated_at->format('Y-m-d') }}">
                                {{ $practice->updated_at->isoFormat('LL') }}
                            </time>
                        </em>
                    </div>
                </section>
            </div>
        </div>

        {{--Actions--}}
        <div class="mb-4" x-data="{displayActions: false}" x-show="displayActions">
            <div class="box content">
                <h2 class="subtitle is-3">Actions</h2>

                <div class="columns is-multiline">
                    @can('publish', $practice)
                        <div class="column is-2">
                            <form method="POST"
                                  action="{{ route('practices.publish', $practice->id) }}"
                                  x-init="displayActions=true"
                            >
                                @csrf
                                <div class="control has-text-right">
                                    <button class="button is-success is-light w-full" type="submit">
                                        {{ __('business.actions.publish') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    @endcan
                </div>
            </div>
        </div>

        {{--Opinions--}}
        <div class="p-4">
            <x-opinions-container :opinions="$practice->opinions" :practice="$practice"/>
        </div>
    </div>
</article>


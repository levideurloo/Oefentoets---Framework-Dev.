@extends('common.master')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12"> {{-- These divs are needed for proper layout --}}
                    <form method="post" action="/owls">
                        <div class="card"> {{-- The form is placed inside a Bulma Card component --}}
                            <header class="card-header">
                                <p class="card-header-title"> {{-- The Card header content --}}
                                    Add a new Owl
                                </p>
                            </header>

                            <div class="card-content">
                                <div class="content">
                                    @csrf
                                    {{-- Here are all the form fields --}}
                                    <div class="field">
                                        <label class="label">Name</label>
                                        <div class="control">
                                            <input name="name" class="input @error('name') is-danger @enderror"
                                                   type="text" placeholder="The Owl's name...">
                                        </div>
                                        @error('name')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label class="label">Teacher</label>
                                        <div class="control">
                                            <input name="teacher_id"
                                                   class="input @error('teacher_id') is-danger @enderror"
                                                   type="number" placeholder="">
                                        </div>
                                        @error('teacher_id')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label class="label">version_nr</label>
                                        <div class="control">
                                            <input name="version_number"
                                                   class="input @error('version') is-danger @enderror"
                                                   type="text" placeholder="The Owl's name...">
                                        </div>
                                        @error('version')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label class="label">is resit</label>
                                        <div class="control">
                                            <input type="radio" id="is_resit" name="is_resit" value="0"><br/>
                                            <input type="radio" id="is_resit" name="is_resit" value="1">
                                        </div>
                                        @error('is_resit')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label class="label">Comments</label>
                                        <div class="control">
                                            <input name="comments" class="input @error('comments') is-danger @enderror"
                                                   type="text" placeholder="">
                                        </div>
                                        @error('comments')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="field is-grouped">
                                    {{-- Here are the form buttons: save, reset and cancel --}}
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Save</button>
                                    </div>
                                    <div class="control">
                                        <button type="reset" class="button is-warning">Reset</button>
                                    </div>
                                    <div class="control">
                                        <a type="button" href="/owls" class="button is-light">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection



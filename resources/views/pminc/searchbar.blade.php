<section class="search_section">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="search_panel">
                    {{Form::open(array('method' => 'GET', 'action' => 'PmSearchController@index'))}}
                        <input type="text" class="search_input " placeholder="What are you looking for?" name="query">
                        <button>Search</button>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</section>
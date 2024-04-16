<div>
    <h3 class="text-xl font-bold">{{ __('Get multiplication array in JSON format') }}</h3>
    <div class="flex my-4">
        <div class="my-auto">
            <img alt="Jason" src="{{url('images/jason.jpg')}}"/>
        </div>
        <div class="pl-4 my-auto">
            <p>{{ __('Jason can generate multiplication array in elegant serialize form.') }}</p>
            <p>{{ __('All you have to do is tell him what size of array you need.') }}</p>
        </div>
    </div>
    <div class="">
        <div class="flex flex-row gap-2 pb-4">
            <label class="font-medium text-slate-700 my-auto" for="size">{{ __('Size of table') }}:</label>
            <input class="ring-1 ring-sky-300 p-2" type="text" wire:model="size">
            <button wire:click="generateJson" type="button" class="w-50 bg-blue-500 py-3 px-2 rounded-lg text-white font-medium">{{ __('Generate') }}</button>
        </div>
        @if($errors->has('size'))
            <div class="mb-4 ml-24 block">
                <span class="text-red-700">{{ __($errors->first('size')) }}</span>
            </div>
        @endif
    </div>


    <div class="gap-2 pb-4">
        <div class="w-full min-h-10 ring-1 ring-sky-300 p-2">
            <button id="cpyBtn" type="button" class="btn float-right">
                <i class="fa-solid fa-copy"></i>
            </button>
            <div id="content"><pre>{{$json}}</pre></div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const copyContent = async () => {
                try {
                    await navigator.clipboard.writeText(document.getElementById('content').innerText);
                } catch (err) {
                    console.error('Failed to copy: ', err);
                }
            }
            document.getElementById('cpyBtn').addEventListener('click', copyContent);
        });
    </script>
</div>


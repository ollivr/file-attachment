<div>
   
    <!-- Title -->
    <div>
        <x-label for="title" value="Title" />

        <x-input 
        	type="text"
        	id="title" 
        	class="block mt-1 w-full" 
        	wire:model="title"
        />

        <x-input-error for="title" class="mt-2" />
    </div>

    {{-- Send file in hidden field incase of regular blade form submit --}}   
    {{-- <input type="hidden" name="attachment" value="{{ $attachment->getFilename() }}"> --}}

    <!-- Attachment -->
    <div class="mt-4">
        <x-label for="attachment" value="Attachment" />

        <x-file-attachment 
        	:file="$attachment"
        	wire:model="attachment"
        />

        <x-input-error for="attachment" class="mt-2" />
    </div>

    <x-button class="mt-5" wire:click.prevent="save" type="button" wire:loading.attr="disabled"
    	wire:loading.class="cursor-not-allowed"
    >
        Save
    </x-button>
   
</div>


<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div class="flex justify-center items-center">
	<!--actual component start-->
	<div x-data="setup()">
        <ul class="flex justify-center items-center my-4">
			<template x-for="(tab, index) in tabs" :key="index">
				<li class="cursor-pointer py-3 px-4 rounded transition"
					:class="activeTab===index ? 'bg-theme-color text-white' : ' text-gray-500'" @click="activeTab = index"
					x-text="tab"></li>
			</template>
		</ul>
        <ul class="flex justify-center items-center my-4">
			<template x-for="(tab, index) in tabs2" :key="index">
				<li class="cursor-pointer py-3 px-4 rounded transition"
					:class="activeTab===index ? 'bg-theme-color text-white' : ' text-gray-500'" @click="activeTab2 = index"
					x-text="tab"></li>
			</template>
		</ul>
		{{-- <ul class="flex justify-center items-center my-4">
			<template x-for="(tab, index) in tabs" :key="index">
				<li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"
					:class="activeTab===index ? 'text-theme-color border-theme-color' : ''" @click="activeTab = index"
					x-text="tab"></li>
			</template>
		</ul> --}}

		<div class="bg-white  text-center mx-auto border">
			<div x-show="activeTab===0">
                Deal
            </div>
			<div x-show="activeTab===1">Content 2</div>
			<div x-show="activeTab===2">Content 3</div>
			<div x-show="activeTab===3">Content 4</div>
			<div x-show="activeTab===4">Content 4</div>
			<div x-show="activeTab===5">Content 4</div>
			<div x-show="activeTab===6">Content 4</div>
			<div x-show="activeTab===7">Content 4</div>
			<div x-show="activeTab===8">Content 4</div>
			<div x-show="activeTab===9">Content 4</div>
		</div>

		{{-- <ul class="flex justify-center items-center my-4">
			<template x-for="(tab, index) in tabs" :key="index">
				<li class="cursor-pointer py-3 px-4 rounded transition"
					:class="activeTab===index ? 'bg-theme-color text-white' : ' text-gray-500'" @click="activeTab = index"
					x-text="tab"></li>
			</template>
		</ul> --}}

		<div class="flex gap-4 justify-center border-t p-4">
			<button
				class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
				@click="activeTab--" x-show="activeTab>0"
				>Back</button>
			<button
				class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
				@click="activeTab++" x-show="activeTab<tabs.length-1"
				>Next</button>
		</div>
		<div class="flex gap-4 justify-center border-t p-4">
			<button
				class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
				@click="activeTab2--" x-show="activeTab>0"
				>Back</button>
			<button
				class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
				@click="activeTab2++" x-show="activeTab<tabs.length-1"
				>Next</button>
		</div>
	</div>
	<!--actual component end-->
</div>

<script>
	function setup() {
    return {
      activeTab: 0,
      tabs: [
          "1st",
          "2nd",
          "3rd",
          "4th",
          "5th",
          "6th",
          "7th",
          "8th",
          "9th",
      ],
      activeTab2:0,
      tabs2: [
        "1 on 1",
        "Class",
      ]
    };
  };
</script>

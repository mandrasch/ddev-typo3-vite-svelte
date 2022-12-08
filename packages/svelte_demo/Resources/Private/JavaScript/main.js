import Test from './Test.svelte';

document.addEventListener('DOMContentLoaded', mountSvelteComponents, false);

function mountSvelteComponents() {

    let blockEls = document.querySelectorAll('.svelte-demo-block-container');

    blockEls.forEach(function (blockEl) {

        const blockId = blockEl.getAttribute('data-block-id');

        const test = new Test({
            target: blockEl,
            // Inject svelte component with props
            // thx to https://jimmyutterstrom.com/blog/2019/06/21/svelte-3-components-in-legacy-apps/
            // TODO: add example with props later, see https://github.com/mandrasch/ddev-wp-acf-blocks-svelte
            // props: svelteDemoBlockData[blockId]
        });
    });
}
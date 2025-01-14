<!-- Quill CSS -->
<link href="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.snow.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/quill-table-better@1/dist/quill-table-better.css" rel="stylesheet" />

<!-- Rich Text Editor Container -->
<div id="editor-container" style="padding: 5px 0px;"></div>
<input type="hidden" name="paragraph" id="paragraph-content">

<style>
    #editor-container {
        color: black !important;
        background-color: #d9bda5;
    }
</style>

<!-- Quill JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill-table-better@1/dist/quill-table-better.js"></script>

<script>
    Quill.register('modules/table-better', QuillTableBetter);

    const toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],
        [{ list: "ordered" }, { list: "bullet" }, { list: "check" }],
        ["link", "image", "video"],
        [{ align: [] }],
        ['table-better']
    ];

    const quill = new Quill('#editor-container', {
        theme: 'snow',
        modules: {
            table: false,
            toolbar: toolbarOptions,
            'table-better': {
                language: 'en_US',
                menus: ['column', 'row', 'merge', 'table', 'cell', 'wrap', 'copy', 'delete'],
                toolbarTable: true
            },
            keyboard: {
                bindings: QuillTableBetter.keyboardBindings
            }
        }
    });

    quill.getModule('toolbar').addHandler('image', () => {
        const input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.click();

        input.onchange = async () => {
            const file = input.files[0];
            const reader = new FileReader();
        
            reader.onload = () => {
                const base64 = reader.result;
                const range = quill.getSelection(true);
                quill.insertEmbed(range.index, 'image', base64);
            };
            reader.readAsDataURL(file);
        };
    });

    document.querySelector('form').addEventListener('submit', function() {
        document.getElementById('paragraph-content').value = quill.root.innerHTML;
    });
</script>
// This logic should be part of the actual pimcore quill bundle
// for pragmatism reasons we apply ownerCt re-rendering here to move fast
Ext.override(pimcore.bundle.quill.editor, {
    setHiddenForToolbar: function(editor, hidden) {
        const toolbar = editor.getModule("toolbar").container;
        toolbar.hidden = hidden;

        if (!hidden) {
            const containers = Ext.ComponentQuery.query(`panel[id=${editor.container.offsetParent.offsetParent.id}]`);

            if (containers) {
                containers.pop().ownerCt.updateLayout();
            }
        }
    },
});
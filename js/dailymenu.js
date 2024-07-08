document.addEventListener("adobe_dc_view_sdk.ready", function()
    {
        var adobeDCView = new AdobeDC.View({clientId: "1a5b73842c0b4dc484b9de861723c2c7", divId: "adobe-dc-view"});
        adobeDCView.previewFile(
       {
          content:   {location: {url: "https://portstanley.cz/img/denni_nabidka/denni_menu.pdf"}},
          metaData: {fileName: "denni_menu.pdf"}
       }
       {embedMode: "SIZED_CONTAINER"});
    });
function copyTrackingNumber() {
    const trackingNumber = "LGS-92927839300763731";
    navigator.clipboard.writeText(trackingNumber).then(function() {
        alert("Tracking number copied to clipboard!");
    }, function(err) {
        console.error("Could not copy text: ", err);
    });
}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script>
function exportWinnersPodium(captureId, filename, btn) {
    var original = btn.innerHTML;
    btn.disabled = true;
    btn.innerHTML = '<i class="mdi mdi-loading mdi-spin me-1"></i> Preparing...';

    var target = document.getElementById(captureId);
    html2canvas(target, { scale: 2, backgroundColor: '#f7f8fc', useCORS: true }).then(function (canvas) {
        var imgData = canvas.toDataURL('image/png');
        var jsPDF = window.jspdf.jsPDF;
        var pdf = new jsPDF({
            orientation: canvas.width > canvas.height ? 'landscape' : 'portrait',
            unit: 'px',
            format: [canvas.width, canvas.height]
        });
        pdf.addImage(imgData, 'PNG', 0, 0, canvas.width, canvas.height);
        pdf.save(filename);
        btn.disabled = false;
        btn.innerHTML = original;
    }).catch(function () {
        btn.disabled = false;
        btn.innerHTML = original;
        alert('Could not generate PDF. Please try the Print option instead.');
    });
}

// A page can show several podiums at once (sector overview), each with its
// own demote modal (id'd per award to avoid collisions) — this handler is
// registered once and, on every trigger click, populates whichever modal
// that specific trigger points to via its data-bs-target, rather than
// relying on a single global element id.
$(document).ready(function ($) {
    $(document).on('click', '[data-action="demote"]', function () {
        var target = $($(this).data('bs-target'));
        target.find('[data-field="nominee-id"]').val($(this).data('nominee-id'));
        target.find('[data-field="nominee-name"]').text($(this).data('nominee-name'));
    });

    // Loading state on the confirm-demotion submit — a full page redirect
    // follows, so the button just needs to stay disabled/spinning until
    // then rather than ever being reset.
    $(document).on('submit', '.wn-demote-confirm-form', function () {
        var btn = $(this).find('button[type="submit"]');
        btn.prop('disabled', true);
        btn.find('.wn-btn-label').text('Demoting...');
        btn.prepend('<i class="mdi mdi-loading mdi-spin me-1"></i>');
    });
});
</script>

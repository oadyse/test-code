<div id="edit{{ $id }}" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
    aria-labelledby="createTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createTitle">Form Master Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body text-left">
                <form method="POST" action="{{ url('/master-data/update/' . base64_encode($id)) }}"
                    class="needs-validation" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="col-3 m-auto">
                            <label for="sel1">Kode Rekening</label>
                        </div>
                        <div class="col-9 mb-0">
                            <select name="id_rek" class="form-control choicesjs mb-0" id="sel1" required>
                                @foreach ($rek as $code)
                                    @if ($master->id_rek == $code->id)
                                        <option value="{{ $code->id }}" selected>{{ $code->kode_rek }}</option>
                                    @else
                                        <option value="{{ $code->id }}">{{ $code->kode_rek }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <div class="invalid-tooltip">
                                Please select One!
                            </div>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-3 m-auto">
                            <label for="validationTooltip02">Nama Rekening</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="validationTooltip02" onchange="autofill()"
                                disabled>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-3 m-auto">
                            <label for="validationTooltip05">Target</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="validationTooltip05" name="target"
                                value="{{ $master->target }}" required>
                            <div class="invalid-tooltip">
                                Please Add the Date!
                            </div>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-3 m-auto">
                            <label for="sel1">Bulan Berlaku</label>
                        </div>
                        <div class="col-9">
                            <select class="form-control" id="sel1" name="bulan_berlaku" required>
                                @for ($a = 1; $a <= 12; $a++)
                                    @if ($a == $master->bulan_berlaku)
                                        <option value="{{ $master->bulan_berlaku }}">
                                            {{ date('F', mktime(0, 0, 0, $master->bulan_berlaku, 10)) }}
                                        </option>
                                    @else
                                        <option value="{{ $a }}">{{ date('F', mktime(0, 0, 0, $a, 10)) }}
                                        </option>
                                    @endif
                                @endfor
                            </select>
                            <div class="invalid-tooltip">
                                Please select One!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-3 m-auto">
                            <label for="validationTooltip04">Tahun Berlaku</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="validationTooltip05" name="tahun_berlaku"
                                value="{{ $master->tahun_berlaku }}" required>
                            <div class="invalid-tooltip">
                                Please select One!
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

{{-- <script>
    function autofill(){
        $.ajax {
            url: 
        }
    }
</script> --}}

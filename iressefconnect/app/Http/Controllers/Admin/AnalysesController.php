<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyAnalysiRequest;
use App\Http\Requests\StoreAnalysiRequest;
use App\Http\Requests\UpdateAnalysiRequest;
use App\Models\Analysi;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AnalysesController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('analysi_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Analysi::query()->select(sprintf('%s.*', (new Analysi())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'analysi_show';
                $editGate = 'analysi_edit';
                $deleteGate = 'analysi_delete';
                $crudRoutePart = 'analysis';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('date_prelev', function ($row) {
                return $row->date_prelev ? $row->date_prelev : '';
            });
            $table->editColumn('identification', function ($row) {
                return $row->identification ? $row->identification : '';
            });
            $table->editColumn('prenom', function ($row) {
                return $row->prenom ? $row->prenom : '';
            });
            $table->editColumn('nom', function ($row) {
                return $row->nom ? $row->nom : '';
            });
            $table->editColumn('age', function ($row) {
                return $row->age ? $row->age : '';
            });
            $table->editColumn('sexe', function ($row) {
                return $row->sexe ? $row->sexe : '';
            });
            $table->editColumn('whatsapp', function ($row) {
                return $row->whatsapp ? $row->whatsapp : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.analysis.index');
    }

    public function create()
    {
        abort_if(Gate::denies('analysi_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.analysis.create');
    }

    public function store(StoreAnalysiRequest $request)
    {
        $analysi = Analysi::create($request->all());

        return redirect()->route('admin.analysis.index');
    }

    public function edit(Analysi $analysi)
    {
        abort_if(Gate::denies('analysi_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.analysis.edit', compact('analysi'));
    }

    public function update(UpdateAnalysiRequest $request, Analysi $analysi)
    {
        $analysi->update($request->all());

        return redirect()->route('admin.analysis.index');
    }

    public function show(Analysi $analysi)
    {
        abort_if(Gate::denies('analysi_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.analysis.show', compact('analysi'));
    }

    public function destroy(Analysi $analysi)
    {
        abort_if(Gate::denies('analysi_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $analysi->delete();

        return back();
    }

    public function massDestroy(MassDestroyAnalysiRequest $request)
    {
        Analysi::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

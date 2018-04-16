<?php

namespace SmallOverload\Http;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Routing\Controller as BaseController;
use SmallOverload\Event\SmallOverloadEvent;
use SmallOverload\Model\SmallOverload1;
use SmallOverload\Service\Validator;

class SmallOverloadController extends BaseController
{
    public function smallOverload()
    {
//        for ($x = 1; $x <= 100; $x++) {
//            $class = 'SmallOverload' . $x . 'Service';
//            $php = <<<PHP
//<?php
//
//namespace SmallOverload\Sevice;
//
//// empty service, to benchmark service count in DIC
//
//class $class
//{
//}
//
//PHP;
//            file_put_contents(__DIR__ . '/../Service/' . $class . '.php', $php);
//        }

//        die;
        $entities = SmallOverload1::all();

        $this
            ->writeSession()
            ->readSession()
            ->fireEvent()
            ->validate($entities);

        return view('SmallOverload::smalloverload', ['smallOverloads' => $entities]);

    }

    protected function writeSession()
    {
        for ($x = 1; $x <= 10; $x++) {
            session(['overload-' . $x => 'overload-' . $x . '-value']);
        }

        return $this;
    }

    protected function readSession()
    {
        for ($x = 1; $x <= 20; $x++) {
            session('overload-' . $x, 'overload-' . $x . '-value-not-found');
        }

        return $this;
    }

    protected function fireEvent()
    {
        event(new SmallOverloadEvent());

        return $this;
    }

    protected function validate(Collection $entities)
    {
        foreach ($entities as $entity) {
//            $validator = new Validator($entity, [
//                'id' => 'integer|min:1',
//                'fixedString' => 'min:28|max:30',
//                'variableString' => 'min:31|max:33',
//                'date' => 'date_format:Y-m-d'
//
//            ],[
//                'id' => 'Key must be and integer.',
//                'fixedString' => 'fixedString length should be between 28 and 30.',
//                'variableString' => 'variableString length should be between 31 and 33.',
//                'date' => 'Date should be in Y-m-d format.'
//            ]);
//
//            $validator->validate();
        }

        return $this;
    }
}

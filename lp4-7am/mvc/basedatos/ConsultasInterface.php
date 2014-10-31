<?php

interface ConsultasInterface
{

    public function select();

    public function update($id);

    public function destroy($id);

    public function add($datos);

} 
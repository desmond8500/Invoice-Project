@servers(['localhost' => '127.0.0.1'])

@task('server', ['on' => 'localhost'])
    echo 'ssh smi@ssh-smi.alwaysdata.net'
@endtask
@task('deploy', ['on' => 'localhost'])
    echo 'ssh smi@ssh-smi.alwaysdata.net'
@endtask

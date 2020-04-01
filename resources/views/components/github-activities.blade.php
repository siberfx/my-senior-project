<div class="card-body">

    <div class="card-header with-border">
        <div class="card-title">
            <i class="fas fa-code-branch"></i>
            {{ 'GitHub Activities ( '. count($commits).' Commits )' }}
        </div>
    </div>

    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>Date</th>
            <th>Author name</th>
            <th>Message</th>
            <th>SHA</th>
        </tr>
        </thead>
        <tbody>

        @foreach($commits as $github)
            <tr>
                <td>
                    <small>
                        {{ date('d-m-Y H:i', strtotime($github['commit']['author']['date'])) }}
                    </small>
                </td>
                <td>
                    <small>
                        <a target="_blank" href="{{ $github['author']['html_url'] }}">
                            {{ $github['commit']['author']['name'] }}
                        </a>
                    </small>
                </td>
                <td><small><i title="{{ $github['commit']['message'] }}">{{ str_limit($github['commit']['message'], 140) }}</i></small></td>
                <td>
                    <small>
                        <a target="_blank" href="{{ $github['html_url'] }}">
                            <i class="fa fa-link"></i> <b>{{ $github['sha'] }}</b>
                        </a>
                        <small>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
</div>

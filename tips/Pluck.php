<?php
# レコードデータから id を array_pluck して int にキャストする
$ids = array_map('intval', array_column($records, 'id'))

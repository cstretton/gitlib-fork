            $oldName = $vars[1];
            $newName = $vars[2];
            $oldMode = null;
            $newMode = null;
            $oldName = $oldName === '/dev/null' ? null : substr($oldName, 2);
            $newName = $newName === '/dev/null' ? null : substr($newName, 2);
                $this->consume(' @@');
                    if ($this->expects(' ')) {
                    } elseif ($this->expects('+')) {
                    } elseif ($this->expects('-')) {
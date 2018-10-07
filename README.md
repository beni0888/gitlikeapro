# Git like a pro

This repository contains a series of labs to be used in the workshop with the same name. 
This workshop aims to teach the use of some 'advanced' git commands and techniques, and 
also to increase the students understanding of the git internals.

The different labs are structured in different branches of this repository, you will have 
to switch from one branch to another in order to complete them.

## Prerequisites

The only lab that really have some prerequisites is **bisect-run**. In order to be able 
to complete this lab, you will need the following:
* **PHP** `>= 5.3` installed on your computer.
* **Composer** (PHP's package manager) installed globally or its phar file downloaded.
* It would be nice if you could checkout **bisect-run** branch, and install its dependencies 
by running `composer install`. This way we will save time at workshop's lab time. It doesn't 
matter if you then prefer to remove all non-versioned contents in the repo, this way composer
has cached the required dependencies and it will take them from local cache on future installations.

## Labs instructions

### Rebase

Execute a rebase operation without facing any conflict:
* Checkout **rebase-no-conflicts** branch.
* Rebase it onto **rebase-base** branch.
* **Tip:** `git log rebase-base…rebase-no-conflicts` (show divergent commits).

Execute a rebase operation that results in conflicts you will have to solve:
* Checkout **rebase-with-conflicts** branch.
* Rebase it onto **rebase-base** branch.
* Resolve arising conflicts and finish the rebase operation.

### Interactive rebase

Execute an interactive rebase operation:
* Checkout **rebase-base** branch.
* You can get its origin commit with `git merge-base master head`.
* Do some experimentation: join commits, edit, reorder...
* Finish the rebase operation and check the results.

### Squash and fixup

Exercise `git commit --squash` and `--fixup` options:
* Checkout **rebase-base** branch.
* Add a new commit with `--squash` option, selecting as the squash target some old commit (not the last one).
* Repeat the previous operation but with `--fixup` option.
* Execute an interactive rebase with `--autosquash` option.
* Check the git log after finishing the rebase operation to check the results.

### Rerere

Exercise git rerere command/feature:
* Run `git config rerere.enabled 1`.
* Checkout **rerere-with-conflicts** branch.
* Run a rebase onto **rerere-base**.
* Solve the arising conflicts and finish the rebase operation.
* Undo the rebase: `git reset --hard ORIG_HEAD`.
* Run the rebase again and see what happens.

### Bisect

Make use of git bisect command to find the commit which introduced a bug:
* Checkout **bisect** branch.
* **File.txt** contains several lines with the text “EDD rocks!”, each one added by a different commit, but one line contains a typo: “EED” instead of ”EDD”.
* Make use of git **bisect** to identify the commit which introduced the line with a typo.
* **Tip:** use the commad `grep EED file.txt` to check if the commit is wrong.

### Bisect with run subcommand

Make use of `git bisect` with the `run` subcommand to find the commit which introduced a bug:
* Checkout **bisect-run** branch.
* You need to make sure your computer meets the **prerequisites** (see section at the top of this document) to follow this lab.
* The current branch’s test suite has a **failing test**, and you have to find the commit which introduced it.
* Make use of `git bisect run` to find the commit which introduced the error.
* **Tip:** use `vendor/bin/phpunit` as the script for bisect run command.




   
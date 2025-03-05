<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function watchlist(){
        return $this->belongsToMany(Movie::class)->withTimestamps();
    }
    public function addToWatchlist(Movie $movie){
        return $this->watchlist()->attach($movie->id);
    }
    public function friends()
    {
        return $this->belongsToMany(User::class, 'friendships', 'userId1', 'userId2')
            ->withPivot('accepted')
            ->withTimestamps();
    }

    public function pendingFriendRequests()
    {
        return $this->friends()->wherePivot('accepted', false);
    }

    public function acceptedFriends()
    {
        return $this->friends()->wherePivot('accepted', true);
    }

    public function sendFriendRequest(User $user)
    {
        return $this->friends()->attach($user->id);
    }

    public function acceptFriendRequest(User $user)
    {
        return $this->friends()->updateExistingPivot($user->id, ['accepted' => true]);
    }

    public function removeFriend(User $user)
    {
        return $this->friends()->detach($user->id);
    }
}
